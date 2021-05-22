<?php

namespace App\Http\Controllers\API;

use App\Events\InviteEvent;
use App\Http\Requests\API\AddFolderToLibraryAPIRequest;
use App\Http\Requests\API\CreateFolderAPIRequest;
use App\Http\Requests\API\InviteRequest;
use App\Http\Requests\API\UpdateFolderAPIRequest;
use App\Http\Requests\API\ValidateFilePassword;
use App\Http\Requests\API\ValidateFolderPassword;
use App\Models\Company;
use App\Models\File;
use App\Models\Folder;
use App\Repositories\FolderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Response;

/**
 * Class FolderController
 * @group Folder
 * @package App\Http\Controllers\API
 */

class FolderAPIController extends AppBaseController
{
    /** @var  FolderRepository */
    private $folderRepository;

    public function __construct(FolderRepository $folderRepo)
    {
        $this->folderRepository = $folderRepo;
    }

    /**
     * Display a listing of the Folder.
     * GET|HEAD /folders
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $folders = $this->folderRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($folders->toArray(), 'Folders retrieved successfully');
    }




    /**
     * Store a newly created Folder in storage.
     * POST /folders
     *
     * @param CreateFolderAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFolderAPIRequest $request)
    {
        $input = $request->all();

        if (@$input['is_lock']) {
            $request->validate($this->passwordRules(), []);
            $input['password'] = Hash::make($input['password']);
        }

        $folder = $this->folderRepository->create($input);
        $folder->library()->attach($input['library_id']);
        return $this->sendResponse($folder->toArray(), 'Folder saved successfully');
    }


    /**
     * Validate File's password.
     *
     *
     */
    public function validatePassword(ValidateFolderPassword $request)
    {
        $input = $request->all();
        $folder = $this->folderRepository->find($input['folder_id']);
        if (empty($folder)) {
            return $this->sendError('Folder not found');
        }

        $isChecked = Hash::check(
            $input['password'], $folder->password
        );
        if (!$isChecked) {
            return $this->sendError("The Password is Incorrect");
        }
        return $this->sendResponse([], 'success');
    }

    protected function passwordRules()
    {
        return [
            'password' => 'required|min:8',
        ];
    }


    /**
     * Add Folder to Library.
     */
    public function addFolderToLibrary(AddFolderToLibraryAPIRequest $request)
    {
        $input = $request->all();

        $folder = $this->folderRepository->create($input['folder_id']);
        $folder->library()->attach($input['library_id']);

        return $this->sendResponse($folder->toArray(), 'Folder Added to Library successfully');
    }


    /**
     * Get All Folders By Library.
     */
    public function byLibrary($id)
    {
        $res = Folder::whereHas('library',function ($q) use ($id){
            $q->where('library_id',$id);
        })->get();
        if ($res->isEmpty()) {
            return $this->sendError('Folder not found');
        }
        return $this->sendResponse($res->toArray(), 'Folder retrieved successfully');
    }

    /**
     * Display the specified Folder.
     * GET|HEAD /folders/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Folder $folder */
        $folder = $this->folderRepository->find($id);

        if (empty($folder)) {
            return $this->sendError('Folder not found');
        }

        return $this->sendResponse($folder->toArray(), 'Folder retrieved successfully');
    }

    /**
     * my Favourites.
     *
     */

    public function myFavourites(Request $request)
    {
        $lib = new Folder();
        $libraries = $lib->where('is_favourite', 1)->get();
        return $this->sendResponse($libraries->toArray(), 'Favourites retrieved successfully');
    }

    /**
     * Update the specified Folder in storage.
     * PUT/PATCH /folders/{id}
     *
     * @param int $id
     * @param UpdateFolderAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFolderAPIRequest $request)
    {
        $input = $request->all();

        /** @var Folder $folder */
        $folder = $this->folderRepository->find($id);
        if (empty($folder)) {
            return $this->sendError('Folder not found');
        }
        if (@$input['is_lock']) {
            $request->validate($this->passwordRules(), []);
            $input['password'] = Hash::make($input['password']);
        }

        $folder = $this->folderRepository->update($input, $id);

        return $this->sendResponse($folder->toArray(), 'Folder updated successfully');
    }

    /**
     * Remove the specified Folder from storage.
     * DELETE /folders/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Folder $folder */
        $folder = $this->folderRepository->find($id);

        if (empty($folder)) {
            return $this->sendError('Folder not found');
        }

        $folder->delete();

        return $this->sendSuccess('Folder deleted successfully');
    }
}
