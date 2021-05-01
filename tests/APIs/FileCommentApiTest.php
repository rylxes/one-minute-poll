<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\FileComment;

class FileCommentApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_file_comment()
    {
        $fileComment = FileComment::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/file_comments', $fileComment
        );

        $this->assertApiResponse($fileComment);
    }

    /**
     * @test
     */
    public function test_read_file_comment()
    {
        $fileComment = FileComment::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/file_comments/'.$fileComment->id
        );

        $this->assertApiResponse($fileComment->toArray());
    }

    /**
     * @test
     */
    public function test_update_file_comment()
    {
        $fileComment = FileComment::factory()->create();
        $editedFileComment = FileComment::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/file_comments/'.$fileComment->id,
            $editedFileComment
        );

        $this->assertApiResponse($editedFileComment);
    }

    /**
     * @test
     */
    public function test_delete_file_comment()
    {
        $fileComment = FileComment::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/file_comments/'.$fileComment->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/file_comments/'.$fileComment->id
        );

        $this->response->assertStatus(404);
    }
}
