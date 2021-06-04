<?php namespace Tests\Repositories;

use App\Models\PollType;
use App\Repositories\PollTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PollTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PollTypeRepository
     */
    protected $pollTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->pollTypeRepo = \App::make(PollTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_poll_type()
    {
        $pollType = PollType::factory()->make()->toArray();

        $createdPollType = $this->pollTypeRepo->create($pollType);

        $createdPollType = $createdPollType->toArray();
        $this->assertArrayHasKey('id', $createdPollType);
        $this->assertNotNull($createdPollType['id'], 'Created PollType must have id specified');
        $this->assertNotNull(PollType::find($createdPollType['id']), 'PollType with given id must be in DB');
        $this->assertModelData($pollType, $createdPollType);
    }

    /**
     * @test read
     */
    public function test_read_poll_type()
    {
        $pollType = PollType::factory()->create();

        $dbPollType = $this->pollTypeRepo->find($pollType->id);

        $dbPollType = $dbPollType->toArray();
        $this->assertModelData($pollType->toArray(), $dbPollType);
    }

    /**
     * @test update
     */
    public function test_update_poll_type()
    {
        $pollType = PollType::factory()->create();
        $fakePollType = PollType::factory()->make()->toArray();

        $updatedPollType = $this->pollTypeRepo->update($fakePollType, $pollType->id);

        $this->assertModelData($fakePollType, $updatedPollType->toArray());
        $dbPollType = $this->pollTypeRepo->find($pollType->id);
        $this->assertModelData($fakePollType, $dbPollType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_poll_type()
    {
        $pollType = PollType::factory()->create();

        $resp = $this->pollTypeRepo->delete($pollType->id);

        $this->assertTrue($resp);
        $this->assertNull(PollType::find($pollType->id), 'PollType should not exist in DB');
    }
}
