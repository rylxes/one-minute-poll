<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFileCommentAPIRequest;
use App\Http\Requests\API\UpdateFileCommentAPIRequest;
use App\Models\FileComment;
use App\Repositories\FileCommentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\FileCommentResource;
use Response;

/**
 * Class FileCommentController
 * @group File Comment
 * @package App\Http\Controllers\API
 */

class FileCommentAPIController extends AppBaseController
{
    /** @var  FileCommentRepository */
    private $fileCommentRepository;

    public function __construct(FileCommentRepository $fileCommentRepo)
    {
        $this->fileCommentRepository = $fileCommentRepo;
    }

    /**
     * Display a listing of the FileComment.
     * GET|HEAD /fileComments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $fileComments = $this->fileCommentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(FileCommentResource::collection($fileComments), 'File Comments retrieved successfully');
    }

    /**
     * Store a newly created FileComment in storage.
     * POST /fileComments
     *
     * @param CreateFileCommentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFileCommentAPIRequest $request)
    {
        $input = $request->all();

        $fileComment = $this->fileCommentRepository->create($input);

        return $this->sendResponse(new FileCommentResource($fileComment), 'File Comment saved successfully');
    }

    /**
     * Display the specified FileComment.
     * GET|HEAD /fileComments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FileComment $fileComment */
        $fileComment = $this->fileCommentRepository->find($id);

        if (empty($fileComment)) {
            return $this->sendError('File Comment not found');
        }

        return $this->sendResponse(new FileCommentResource($fileComment), 'File Comment retrieved successfully');
    }

    /**
     * Update the specified FileComment in storage.
     * PUT/PATCH /fileComments/{id}
     *
     * @param int $id
     * @param UpdateFileCommentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileCommentAPIRequest $request)
    {
        $input = $request->all();

        /** @var FileComment $fileComment */
        $fileComment = $this->fileCommentRepository->find($id);

        if (empty($fileComment)) {
            return $this->sendError('File Comment not found');
        }

        $fileComment = $this->fileCommentRepository->update($input, $id);

        return $this->sendResponse(new FileCommentResource($fileComment), 'FileComment updated successfully');
    }

    /**
     * Remove the specified FileComment from storage.
     * DELETE /fileComments/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FileComment $fileComment */
        $fileComment = $this->fileCommentRepository->find($id);

        if (empty($fileComment)) {
            return $this->sendError('File Comment not found');
        }

        $fileComment->delete();

        return $this->sendSuccess('File Comment deleted successfully');
    }
}
