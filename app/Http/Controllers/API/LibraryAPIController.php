<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLibraryAPIRequest;
use App\Http\Requests\API\UpdateLibraryAPIRequest;
use App\Http\Requests\API\ValidatePassword;
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
        $libraries = $this->libraryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

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
        $isChecked =  Hash::check(
            $input['password'], $library->password
        );
        if(!$isChecked){
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
