<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\FolderTag;

class FolderTagApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_folder_tag()
    {
        $folderTag = FolderTag::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/folder_tags', $folderTag
        );

        $this->assertApiResponse($folderTag);
    }

    /**
     * @test
     */
    public function test_read_folder_tag()
    {
        $folderTag = FolderTag::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/folder_tags/'.$folderTag->id
        );

        $this->assertApiResponse($folderTag->toArray());
    }

    /**
     * @test
     */
    public function test_update_folder_tag()
    {
        $folderTag = FolderTag::factory()->create();
        $editedFolderTag = FolderTag::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/folder_tags/'.$folderTag->id,
            $editedFolderTag
        );

        $this->assertApiResponse($editedFolderTag);
    }

    /**
     * @test
     */
    public function test_delete_folder_tag()
    {
        $folderTag = FolderTag::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/folder_tags/'.$folderTag->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/folder_tags/'.$folderTag->id
        );

        $this->response->assertStatus(404);
    }
}
