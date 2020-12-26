<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Library;

class LibraryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_library()
    {
        $library = Library::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/libraries', $library
        );

        $this->assertApiResponse($library);
    }

    /**
     * @test
     */
    public function test_read_library()
    {
        $library = Library::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/libraries/'.$library->id
        );

        $this->assertApiResponse($library->toArray());
    }

    /**
     * @test
     */
    public function test_update_library()
    {
        $library = Library::factory()->create();
        $editedLibrary = Library::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/libraries/'.$library->id,
            $editedLibrary
        );

        $this->assertApiResponse($editedLibrary);
    }

    /**
     * @test
     */
    public function test_delete_library()
    {
        $library = Library::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/libraries/'.$library->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/libraries/'.$library->id
        );

        $this->response->assertStatus(404);
    }
}
