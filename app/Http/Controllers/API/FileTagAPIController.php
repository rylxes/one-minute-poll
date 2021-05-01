<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFileTagAPIRequest;
use App\Http\Requests\API\UpdateFileTagAPIRequest;
use App\Models\FileTag;
use App\Repositories\FileTagRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\FileTagResource;
use Response;

/**
 * Class FileTagController
 * @group File Tag
 * @package App\Http\Controllers\API
 */

class FileTagAPIController extends AppBaseController
{
    /** @var  FileTagRepository */
    private $fileTagRepository;

    public function __construct(FileTagRepository $fileTagRepo)
    {
        $this->fileTagRepository = $fileTagRepo;
    }

    /**
     * Display a listing of the FileTag.
     * GET|HEAD /fileTags
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $fileTags = $this->fileTagRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(FileTagResource::collection($fileTags), 'File Tags retrieved successfully');
    }

    /**
     * Store a newly created FileTag in storage.
     * POST /fileTags
     *
     * @param CreateFileTagAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFileTagAPIRequest $request)
    {
        $input = $request->all();

        $fileTag = $this->fileTagRepository->create($input);

        return $this->sendResponse(new FileTagResource($fileTag), 'File Tag saved successfully');
    }

    /**
     * Display the specified FileTag.
     * GET|HEAD /fileTags/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FileTag $fileTag */
        $fileTag = $this->fileTagRepository->find($id);

        if (empty($fileTag)) {
            return $this->sendError('File Tag not found');
        }

        return $this->sendResponse(new FileTagResource($fileTag), 'File Tag retrieved successfully');
    }

    /**
     * Update the specified FileTag in storage.
     * PUT/PATCH /fileTags/{id}
     *
     * @param int $id
     * @param UpdateFileTagAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileTagAPIRequest $request)
    {
        $input = $request->all();

        /** @var FileTag $fileTag */
        $fileTag = $this->fileTagRepository->find($id);

        if (empty($fileTag)) {
            return $this->sendError('File Tag not found');
        }

        $fileTag = $this->fileTagRepository->update($input, $id);

        return $this->sendResponse(new FileTagResource($fileTag), 'FileTag updated successfully');
    }

    /**
     * Remove the specified FileTag from storage.
     * DELETE /fileTags/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FileTag $fileTag */
        $fileTag = $this->fileTagRepository->find($id);

        if (empty($fileTag)) {
            return $this->sendError('File Tag not found');
        }

        $fileTag->delete();

        return $this->sendSuccess('File Tag deleted successfully');
    }
}
