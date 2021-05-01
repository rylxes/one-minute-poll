<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFolderTagAPIRequest;
use App\Http\Requests\API\UpdateFolderTagAPIRequest;
use App\Models\FolderTag;
use App\Repositories\FolderTagRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\FolderTagResource;
use Response;

/**
 * Class FolderTagController
 * @group Folder Tag
 * @package App\Http\Controllers\API
 */

class FolderTagAPIController extends AppBaseController
{
    /** @var  FolderTagRepository */
    private $folderTagRepository;

    public function __construct(FolderTagRepository $folderTagRepo)
    {
        $this->folderTagRepository = $folderTagRepo;
    }

    /**
     * Display a listing of the FolderTag.
     * GET|HEAD /folderTags
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $folderTags = $this->folderTagRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(FolderTagResource::collection($folderTags), 'Folder Tags retrieved successfully');
    }

    /**
     * Store a newly created FolderTag in storage.
     * POST /folderTags
     *
     * @param CreateFolderTagAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFolderTagAPIRequest $request)
    {
        $input = $request->all();

        $folderTag = $this->folderTagRepository->create($input);

        return $this->sendResponse(new FolderTagResource($folderTag), 'Folder Tag saved successfully');
    }

    /**
     * Display the specified FolderTag.
     * GET|HEAD /folderTags/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FolderTag $folderTag */
        $folderTag = $this->folderTagRepository->find($id);

        if (empty($folderTag)) {
            return $this->sendError('Folder Tag not found');
        }

        return $this->sendResponse(new FolderTagResource($folderTag), 'Folder Tag retrieved successfully');
    }

    /**
     * Update the specified FolderTag in storage.
     * PUT/PATCH /folderTags/{id}
     *
     * @param int $id
     * @param UpdateFolderTagAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFolderTagAPIRequest $request)
    {
        $input = $request->all();

        /** @var FolderTag $folderTag */
        $folderTag = $this->folderTagRepository->find($id);

        if (empty($folderTag)) {
            return $this->sendError('Folder Tag not found');
        }

        $folderTag = $this->folderTagRepository->update($input, $id);

        return $this->sendResponse(new FolderTagResource($folderTag), 'FolderTag updated successfully');
    }

    /**
     * Remove the specified FolderTag from storage.
     * DELETE /folderTags/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FolderTag $folderTag */
        $folderTag = $this->folderTagRepository->find($id);

        if (empty($folderTag)) {
            return $this->sendError('Folder Tag not found');
        }

        $folderTag->delete();

        return $this->sendSuccess('Folder Tag deleted successfully');
    }
}
