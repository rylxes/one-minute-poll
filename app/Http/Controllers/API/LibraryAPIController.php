<?php

namespace App\Http\Controllers\API;

use App\Events\InviteEvent;
use App\Http\Requests\API\CreateLibraryAPIRequest;
use App\Http\Requests\API\InviteRequest;
use App\Http\Requests\API\ShareLibrary;
use App\Http\Requests\API\ShareLibraryRole;
use App\Http\Requests\API\UpdateLibraryAPIRequest;
use App\Http\Requests\API\ValidatePassword;
use App\Models\Company;
use App\Models\Library;
use App\Repositories\LibraryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Response;

/**
 * Class LibraryController
 * @group Library
 * @package App\Http\Controllers\API
 */
class LibraryAPIController extends AppBaseController
{
    /** @var  LibraryRepository */
    private $libraryRepository;

    public function __construct(LibraryRepository $libraryRepo)
    {
        $this->libraryRepository = $libraryRepo;
    }

    /**
     * Display a listing of the Library.
     * GET|HEAD /libraries
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $lib = new Library();
        $libraries = $lib->whereHas('theUsers', function($query) {
            $query->where('user_id', auth()->user()->id);
        })->orWhereHas('theGroup', function($query) {
            $groups = auth()->user()->groups->pluck('id')->toArray();
            $query->whereIn('group_id', $groups);
        })->get();


        return $this->sendResponse($libraries->toArray(), 'Libraries retrieved successfully');
    }

    /**
     * Store a newly created Library in storage.
     * POST /libraries
     *
     * @param CreateLibraryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLibraryAPIRequest $request)
    {
        $input = $request->all();

        if ($input['is_encrypted']) {
            $request->validate($this->passwordRules(), []);
            $input['password'] = Hash::make($input['password']);
        }

        $library = $this->libraryRepository->create($input);

        return $this->sendResponse($library->toArray(), 'Library saved successfully');
    }

    /**
     * Share Library to Group.
     *
     */
    public function shareToRole(ShareLibraryRole $request)
    {
        $data = $request->all();
        $library = Library::find($data['library_id']);
        if ($library->is_encrypted) {
            $request->validate($this->passwordRules(), []);
        }
        $library->theGroup()->attach($data['group_id']);
        $message = "Library shared";
        return $this->sendResponse($data, $message);
    }

    /**
     * Share Library to User.
     *
     */
    public function shareToUser(ShareLibrary $request)
    {
        $data = $request->all();
        $library = Library::find($data['library_id']);
        if ($library->is_encrypted) {
            $request->validate($this->passwordRules(), []);
        }
        $library->theUsers()->attach($data['user_id']);
        $message = "Library shared";
        return $this->sendResponse($data, $message);
    }

    /**
     * Validate Library's password.
     *
     *
     */
    public function validatePassword(ValidatePassword $request)
    {
        $input = $request->all();
        /** @var Library $library */
        $library = $this->libraryRepository->find($input['library_id']);
        if (empty($library)) {
            return $this->sendError('Library not found');
        }
        $isChecked = Hash::check(
            $input['password'], $library->password
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
     * Display the specified Library.
     * GET|HEAD /libraries/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Library $library */
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            return $this->sendError('Library not found');
        }

        return $this->sendResponse($library->toArray(), 'Library retrieved successfully');
    }

    /**
     * Update the specified Library in storage.
     * PUT/PATCH /libraries/{id}
     *
     * @param int $id
     * @param UpdateLibraryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLibraryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Library $library */
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            return $this->sendError('Library not found');
        }

        $library = $this->libraryRepository->update($input, $id);

        return $this->sendResponse($library->toArray(), 'Library updated successfully');
    }

    /**
     * Remove the specified Library from storage.
     * DELETE /libraries/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Library $library */
        $library = $this->libraryRepository->find($id);

        if (empty($library)) {
            return $this->sendError('Library not found');
        }

        $library->delete();

        return $this->sendSuccess('Library deleted successfully');
    }
}
