<?php namespace Tests\Repositories;

use App\Models\PollOption;
use App\Repositories\PollOptionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PollOptionRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PollOptionRepository
     */
    protected $pollOptionRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->pollOptionRepo = \App::make(PollOptionRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_poll_option()
    {
        $pollOption = PollOption::factory()->make()->toArray();

        $createdPollOption = $this->pollOptionRepo->create($pollOption);

        $createdPollOption = $createdPollOption->toArray();
        $this->assertArrayHasKey('id', $createdPollOption);
        $this->assertNotNull($createdPollOption['id'], 'Created PollOption must have id specified');
        $this->assertNotNull(PollOption::find($createdPollOption['id']), 'PollOption with given id must be in DB');
        $this->assertModelData($pollOption, $createdPollOption);
    }

    /**
     * @test read
     */
    public function test_read_poll_option()
    {
        $pollOption = PollOption::factory()->create();

        $dbPollOption = $this->pollOptionRepo->find($pollOption->id);

        $dbPollOption = $dbPollOption->toArray();
        $this->assertModelData($pollOption->toArray(), $dbPollOption);
    }

    /**
     * @test update
     */
    public function test_update_poll_option()
    {
        $pollOption = PollOption::factory()->create();
        $fakePollOption = PollOption::factory()->make()->toArray();

        $updatedPollOption = $this->pollOptionRepo->update($fakePollOption, $pollOption->id);

        $this->assertModelData($fakePollOption, $updatedPollOption->toArray());
        $dbPollOption = $this->pollOptionRepo->find($pollOption->id);
        $this->assertModelData($fakePollOption, $dbPollOption->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_poll_option()
    {
        $pollOption = PollOption::factory()->create();

        $resp = $this->pollOptionRepo->delete($pollOption->id);

        $this->assertTrue($resp);
        $this->assertNull(PollOption::find($pollOption->id), 'PollOption should not exist in DB');
    }
}
