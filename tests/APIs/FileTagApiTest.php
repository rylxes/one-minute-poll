<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\FileTag;

class FileTagApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_file_tag()
    {
        $fileTag = FileTag::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/file_tags', $fileTag
        );

        $this->assertApiResponse($fileTag);
    }

    /**
     * @test
     */
    public function test_read_file_tag()
    {
        $fileTag = FileTag::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/file_tags/'.$fileTag->id
        );

        $this->assertApiResponse($fileTag->toArray());
    }

    /**
     * @test
     */
    public function test_update_file_tag()
    {
        $fileTag = FileTag::factory()->create();
        $editedFileTag = FileTag::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/file_tags/'.$fileTag->id,
            $editedFileTag
        );

        $this->assertApiResponse($editedFileTag);
    }

    /**
     * @test
     */
    public function test_delete_file_tag()
    {
        $fileTag = FileTag::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/file_tags/'.$fileTag->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/file_tags/'.$fileTag->id
        );

        $this->response->assertStatus(404);
    }
}
