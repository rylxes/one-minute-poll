<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Vote;

class VoteApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_vote()
    {
        $vote = Vote::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/votes', $vote
        );

        $this->assertApiResponse($vote);
    }

    /**
     * @test
     */
    public function test_read_vote()
    {
        $vote = Vote::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/votes/'.$vote->id
        );

        $this->assertApiResponse($vote->toArray());
    }

    /**
     * @test
     */
    public function test_update_vote()
    {
        $vote = Vote::factory()->create();
        $editedVote = Vote::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/votes/'.$vote->id,
            $editedVote
        );

        $this->assertApiResponse($editedVote);
    }

    /**
     * @test
     */
    public function test_delete_vote()
    {
        $vote = Vote::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/votes/'.$vote->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/votes/'.$vote->id
        );

        $this->response->assertStatus(404);
    }
}
