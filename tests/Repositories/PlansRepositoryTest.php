<?php namespace Tests\Repositories;

use App\Models\Plans;
use App\Repositories\PlansRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PlansRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PlansRepository
     */
    protected $plansRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->plansRepo = \App::make(PlansRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_plans()
    {
        $plans = Plans::factory()->make()->toArray();

        $createdPlans = $this->plansRepo->create($plans);

        $createdPlans = $createdPlans->toArray();
        $this->assertArrayHasKey('id', $createdPlans);
        $this->assertNotNull($createdPlans['id'], 'Created Plans must have id specified');
        $this->assertNotNull(Plans::find($createdPlans['id']), 'Plans with given id must be in DB');
        $this->assertModelData($plans, $createdPlans);
    }

    /**
     * @test read
     */
    public function test_read_plans()
    {
        $plans = Plans::factory()->create();

        $dbPlans = $this->plansRepo->find($plans->id);

        $dbPlans = $dbPlans->toArray();
        $this->assertModelData($plans->toArray(), $dbPlans);
    }

    /**
     * @test update
     */
    public function test_update_plans()
    {
        $plans = Plans::factory()->create();
        $fakePlans = Plans::factory()->make()->toArray();

        $updatedPlans = $this->plansRepo->update($fakePlans, $plans->id);

        $this->assertModelData($fakePlans, $updatedPlans->toArray());
        $dbPlans = $this->plansRepo->find($plans->id);
        $this->assertModelData($fakePlans, $dbPlans->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_plans()
    {
        $plans = Plans::factory()->create();

        $resp = $this->plansRepo->delete($plans->id);

        $this->assertTrue($resp);
        $this->assertNull(Plans::find($plans->id), 'Plans should not exist in DB');
    }
}
