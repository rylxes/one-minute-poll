<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\FolderFile;

class FolderFileApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_folder_file()
    {
        $folderFile = FolderFile::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/folder_files', $folderFile
        );

        $this->assertApiResponse($folderFile);
    }

    /**
     * @test
     */
    public function test_read_folder_file()
    {
        $folderFile = FolderFile::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/folder_files/'.$folderFile->id
        );

        $this->assertApiResponse($folderFile->toArray());
    }

    /**
     * @test
     */
    public function test_update_folder_file()
    {
        $folderFile = FolderFile::factory()->create();
        $editedFolderFile = FolderFile::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/folder_files/'.$folderFile->id,
            $editedFolderFile
        );

        $this->assertApiResponse($editedFolderFile);
    }

    /**
     * @test
     */
    public function test_delete_folder_file()
    {
        $folderFile = FolderFile::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/folder_files/'.$folderFile->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/folder_files/'.$folderFile->id
        );

        $this->response->assertStatus(404);
    }
}
