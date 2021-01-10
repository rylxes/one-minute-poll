<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFileAPIRequest;
use App\Http\Requests\API\UpdateFileAPIRequest;
use App\Models\File;
use App\Repositories\FileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class FileController
 * @group File
 * @package App\Http\Controllers\API
 */

class FileAPIController extends AppBaseController
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * Display a listing of the File.
     * GET|HEAD /files
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $files = $this->fileRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($files->toArray(), 'Files retrieved successfully');
    }

    /**
     * Store a newly created File in storage.
     * POST /files
     *
     * @param CreateFileAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFileAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $file = $this->fileRepository->create($input);

        if (!empty($request->file('file'))) {
            try {
                $file->addMedia($request->file('file'))->toMediaCollection('Documents');
                $mediaItems = $file->getMedia('Documents');
                $input['url'] = $mediaItems[0]->getFullUrl();
                $this->fileRepository->update($input, $file->id);
            } catch (\Exception $exception) {
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
        $file->folder()->attach($input['folder_id']);
        DB::commit();
        return $this->sendResponse($file->toArray(), 'File saved successfully');
    }


    public function byFolder($id)
    {
        $res = File::whereHas('folder',function ($q) use ($id){
            $q->where('folder_id',$id);
        })->get();
        if ($res->isEmpty()) {
            return $this->sendError('Files not found');
        }
        return $this->sendResponse($res->toArray(), 'Files retrieved successfully');
    }


    /**
     * Display the specified File.
     * GET|HEAD /files/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var File $file */
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            return $this->sendError('File not found');
        }

        return $this->sendResponse($file->toArray(), 'File retrieved successfully');
    }

    /**
     * Update the specified File in storage.
     * PUT/PATCH /files/{id}
     *
     * @param int $id
     * @param UpdateFileAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileAPIRequest $request)
    {
        $input = $request->all();

        /** @var File $file */
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            return $this->sendError('File not found');
        }

        $file = $this->fileRepository->update($input, $id);

        return $this->sendResponse($file->toArray(), 'File updated successfully');
    }

    /**
     * Remove the specified File from storage.
     * DELETE /files/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var File $file */
        $file = $this->fileRepository->find($id);

        if (empty($file)) {
            return $this->sendError('File not found');
        }

        $file->delete();

        return $this->sendSuccess('File deleted successfully');
    }
}
