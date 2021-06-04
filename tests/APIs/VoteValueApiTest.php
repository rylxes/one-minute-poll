<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\VoteValue;

class VoteValueApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_vote_value()
    {
        $voteValue = VoteValue::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/vote_values', $voteValue
        );

        $this->assertApiResponse($voteValue);
    }

    /**
     * @test
     */
    public function test_read_vote_value()
    {
        $voteValue = VoteValue::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/vote_values/'.$voteValue->id
        );

        $this->assertApiResponse($voteValue->toArray());
    }

    /**
     * @test
     */
    public function test_update_vote_value()
    {
        $voteValue = VoteValue::factory()->create();
        $editedVoteValue = VoteValue::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/vote_values/'.$voteValue->id,
            $editedVoteValue
        );

        $this->assertApiResponse($editedVoteValue);
    }

    /**
     * @test
     */
    public function test_delete_vote_value()
    {
        $voteValue = VoteValue::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/vote_values/'.$voteValue->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/vote_values/'.$voteValue->id
        );

        $this->response->assertStatus(404);
    }
}
