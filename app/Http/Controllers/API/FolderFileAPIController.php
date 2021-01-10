<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFolderFileAPIRequest;
use App\Http\Requests\API\UpdateFolderFileAPIRequest;
use App\Models\FolderFile;
use App\Repositories\FolderFileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\FolderFileResource;
use Response;

/**
 * Class FolderFileController
 * @group Folder File
 * @package App\Http\Controllers\API
 */

class FolderFileAPIController extends AppBaseController
{
    /** @var  FolderFileRepository */
    private $folderFileRepository;

    public function __construct(FolderFileRepository $folderFileRepo)
    {
        $this->folderFileRepository = $folderFileRepo;
    }

    /**
     * Display a listing of the FolderFile.
     * GET|HEAD /folderFiles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $folderFiles = $this->folderFileRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(FolderFileResource::collection($folderFiles), 'Folder Files retrieved successfully');
    }

    /**
     * Store a newly created FolderFile in storage.
     * POST /folderFiles
     *
     * @param CreateFolderFileAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFolderFileAPIRequest $request)
    {
        $input = $request->all();

        $folderFile = $this->folderFileRepository->create($input);

        return $this->sendResponse(new FolderFileResource($folderFile), 'Folder File saved successfully');
    }

    /**
     * Display the specified FolderFile.
     * GET|HEAD /folderFiles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FolderFile $folderFile */
        $folderFile = $this->folderFileRepository->find($id);

        if (empty($folderFile)) {
            return $this->sendError('Folder File not found');
        }

        return $this->sendResponse(new FolderFileResource($folderFile), 'Folder File retrieved successfully');
    }

    /**
     * Update the specified FolderFile in storage.
     * PUT/PATCH /folderFiles/{id}
     *
     * @param int $id
     * @param UpdateFolderFileAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFolderFileAPIRequest $request)
    {
        $input = $request->all();

        /** @var FolderFile $folderFile */
        $folderFile = $this->folderFileRepository->find($id);

        if (empty($folderFile)) {
            return $this->sendError('Folder File not found');
        }

        $folderFile = $this->folderFileRepository->update($input, $id);

        return $this->sendResponse(new FolderFileResource($folderFile), 'FolderFile updated successfully');
    }

    /**
     * Remove the specified FolderFile from storage.
     * DELETE /folderFiles/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FolderFile $folderFile */
        $folderFile = $this->folderFileRepository->find($id);

        if (empty($folderFile)) {
            return $this->sendError('Folder File not found');
        }

        $folderFile->delete();

        return $this->sendSuccess('Folder File deleted successfully');
    }
}
