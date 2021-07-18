<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PollOption;

class PollOptionApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_poll_option()
    {
        $pollOption = PollOption::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/poll_options', $pollOption
        );

        $this->assertApiResponse($pollOption);
    }

    /**
     * @test
     */
    public function test_read_poll_option()
    {
        $pollOption = PollOption::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/poll_options/'.$pollOption->id
        );

        $this->assertApiResponse($pollOption->toArray());
    }

    /**
     * @test
     */
    public function test_update_poll_option()
    {
        $pollOption = PollOption::factory()->create();
        $editedPollOption = PollOption::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/poll_options/'.$pollOption->id,
            $editedPollOption
        );

        $this->assertApiResponse($editedPollOption);
    }

    /**
     * @test
     */
    public function test_delete_poll_option()
    {
        $pollOption = PollOption::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/poll_options/'.$pollOption->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/poll_options/'.$pollOption->id
        );

        $this->response->assertStatus(404);
    }
}
