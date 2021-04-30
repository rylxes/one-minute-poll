<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFileAPIRequest;
use App\Http\Requests\API\UpdateFileAPIRequest;
use App\Http\Requests\API\ValidateFilePassword;
use App\Http\Requests\API\ValidatePassword;
use App\Models\File;
use App\Models\Library;
use App\Repositories\FileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    private $isFileSuccess = false;

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


        if (@$input['is_lock']) {
            $request->validate($this->passwordRules(), []);
            $input['password'] = Hash::make($input['password']);
        }

        $file = $this->fileRepository->create($input);
        $__response = $this->uploadFile($request, $file);
        if (!$this->isFileSuccess) {
            return $__response;
        }
        $file->folder()->attach($input['folder_id']);
        DB::commit();


        $file = $this->fileRepository->find($file->id);
        $mediaItems = $file->getMedia('Documents');
        $input['url'] = $mediaItems[0]->getFullUrl();
        $this->fileRepository->update($input, $file->id);
        return $this->sendResponse($file->toArray(), 'File saved successfully');
    }

    protected function passwordRules()
    {
        return [
            'password' => 'required|min:8',
        ];
    }


    function uploadFile(Request $request, File $file)
    {
        $this->isFileSuccess = false;
        if (!empty($request->file('file'))) {
            $this->deleteFile($file);
            try {
                $file->addMedia($request->file('file'))
                    ->toMediaCollection('Documents');
                $this->isFileSuccess = true;
                if (empty($file->media)) {
                    DB::rollBack();
                    return $this->sendError("There was an issue uploading your file");
                }
            } catch (\Throwable $exception) {
                //dd($exception->getMessage());
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
    }

    /**
     * Get All Files By Folder.
     *
     *
     *
     *
     *
     */

    public function byFolder($id)
    {
        $res = File::whereHas('folder', function ($q) use ($id) {
            $q->where('folder_id', $id);
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
     * Validate File's password.
     *
     *
     */
    public function validatePassword(ValidateFilePassword $request)
    {
        $input = $request->all();
        /** @var File $file */
        $file = $this->fileRepository->find($input['library_id']);
        if (empty($file)) {
            return $this->sendError('File not found');
        }

        $isChecked = Hash::check(
            $input['password'], $file->password
        );
        if (!$isChecked) {
            return $this->sendError("The Password is Incorrect");
        }
        return $this->sendResponse([], 'success');
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
        DB::beginTransaction();
        if ($input['is_lock']) {
            $request->validate($this->passwordRules(), []);
            $input['password'] = Hash::make($input['password']);
        }
        $file = $this->fileRepository->update($input, $id);
        $__response = $this->uploadFile($request, $file);
        if (!$this->isFileSuccess) {
            return $__response;
        }
        $file->folder()->attach($input['folder_id']);
        DB::commit();

        return $this->sendResponse($file->toArray(), 'File updated successfully');
    }

    /**
     * Remove the specified File from storage.
     * DELETE /files/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var File $file */
        $file = $this->fileRepository->find($id);
        if (empty($file)) {
            return $this->sendError('File not found');
        }
        $this->deleteFile($file);
        return $this->sendSuccess('File deleted successfully');
    }

    function deleteFile(File $file)
    {
        try {
            $mediaItem = $file->getMedia()->first();
            $file->deleteMedia($mediaItem);
            $file->delete();
        } catch (\Exception $exception) {

        }
    }
}
