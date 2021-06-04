<?php namespace Tests\Repositories;

use App\Models\Vote;
use App\Repositories\VoteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class VoteRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var VoteRepository
     */
    protected $voteRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->voteRepo = \App::make(VoteRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_vote()
    {
        $vote = Vote::factory()->make()->toArray();

        $createdVote = $this->voteRepo->create($vote);

        $createdVote = $createdVote->toArray();
        $this->assertArrayHasKey('id', $createdVote);
        $this->assertNotNull($createdVote['id'], 'Created Vote must have id specified');
        $this->assertNotNull(Vote::find($createdVote['id']), 'Vote with given id must be in DB');
        $this->assertModelData($vote, $createdVote);
    }

    /**
     * @test read
     */
    public function test_read_vote()
    {
        $vote = Vote::factory()->create();

        $dbVote = $this->voteRepo->find($vote->id);

        $dbVote = $dbVote->toArray();
        $this->assertModelData($vote->toArray(), $dbVote);
    }

    /**
     * @test update
     */
    public function test_update_vote()
    {
        $vote = Vote::factory()->create();
        $fakeVote = Vote::factory()->make()->toArray();

        $updatedVote = $this->voteRepo->update($fakeVote, $vote->id);

        $this->assertModelData($fakeVote, $updatedVote->toArray());
        $dbVote = $this->voteRepo->find($vote->id);
        $this->assertModelData($fakeVote, $dbVote->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_vote()
    {
        $vote = Vote::factory()->create();

        $resp = $this->voteRepo->delete($vote->id);

        $this->assertTrue($resp);
        $this->assertNull(Vote::find($vote->id), 'Vote should not exist in DB');
    }
}
