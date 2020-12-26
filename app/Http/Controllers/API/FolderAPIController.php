<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFolderAPIRequest;
use App\Http\Requests\API\UpdateFolderAPIRequest;
use App\Models\Folder;
use App\Repositories\FolderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
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

        $folder = $this->folderRepository->create($input);

        return $this->sendResponse($folder->toArray(), 'Folder saved successfully');
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
