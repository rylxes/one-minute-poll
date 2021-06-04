<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PollType;

class PollTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_poll_type()
    {
        $pollType = PollType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/poll_types', $pollType
        );

        $this->assertApiResponse($pollType);
    }

    /**
     * @test
     */
    public function test_read_poll_type()
    {
        $pollType = PollType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/poll_types/'.$pollType->id
        );

        $this->assertApiResponse($pollType->toArray());
    }

    /**
     * @test
     */
    public function test_update_poll_type()
    {
        $pollType = PollType::factory()->create();
        $editedPollType = PollType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/poll_types/'.$pollType->id,
            $editedPollType
        );

        $this->assertApiResponse($editedPollType);
    }

    /**
     * @test
     */
    public function test_delete_poll_type()
    {
        $pollType = PollType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/poll_types/'.$pollType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/poll_types/'.$pollType->id
        );

        $this->response->assertStatus(404);
    }
}
