<?php namespace Tests\Repositories;

use App\Models\VoteValue;
use App\Repositories\VoteValueRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class VoteValueRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var VoteValueRepository
     */
    protected $voteValueRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->voteValueRepo = \App::make(VoteValueRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_vote_value()
    {
        $voteValue = VoteValue::factory()->make()->toArray();

        $createdVoteValue = $this->voteValueRepo->create($voteValue);

        $createdVoteValue = $createdVoteValue->toArray();
        $this->assertArrayHasKey('id', $createdVoteValue);
        $this->assertNotNull($createdVoteValue['id'], 'Created VoteValue must have id specified');
        $this->assertNotNull(VoteValue::find($createdVoteValue['id']), 'VoteValue with given id must be in DB');
        $this->assertModelData($voteValue, $createdVoteValue);
    }

    /**
     * @test read
     */
    public function test_read_vote_value()
    {
        $voteValue = VoteValue::factory()->create();

        $dbVoteValue = $this->voteValueRepo->find($voteValue->id);

        $dbVoteValue = $dbVoteValue->toArray();
        $this->assertModelData($voteValue->toArray(), $dbVoteValue);
    }

    /**
     * @test update
     */
    public function test_update_vote_value()
    {
        $voteValue = VoteValue::factory()->create();
        $fakeVoteValue = VoteValue::factory()->make()->toArray();

        $updatedVoteValue = $this->voteValueRepo->update($fakeVoteValue, $voteValue->id);

        $this->assertModelData($fakeVoteValue, $updatedVoteValue->toArray());
        $dbVoteValue = $this->voteValueRepo->find($voteValue->id);
        $this->assertModelData($fakeVoteValue, $dbVoteValue->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_vote_value()
    {
        $voteValue = VoteValue::factory()->create();

        $resp = $this->voteValueRepo->delete($voteValue->id);

        $this->assertTrue($resp);
        $this->assertNull(VoteValue::find($voteValue->id), 'VoteValue should not exist in DB');
    }
}
