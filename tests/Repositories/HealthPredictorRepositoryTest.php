<?php namespace Tests\Repositories;

use App\Models\HealthPredictor;
use App\Repositories\HealthPredictorRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class HealthPredictorRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var HealthPredictorRepository
     */
    protected $healthPredictorRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->healthPredictorRepo = \App::make(HealthPredictorRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->make()->toArray();

        $createdHealthPredictor = $this->healthPredictorRepo->create($healthPredictor);

        $createdHealthPredictor = $createdHealthPredictor->toArray();
        $this->assertArrayHasKey('id', $createdHealthPredictor);
        $this->assertNotNull($createdHealthPredictor['id'], 'Created HealthPredictor must have id specified');
        $this->assertNotNull(HealthPredictor::find($createdHealthPredictor['id']), 'HealthPredictor with given id must be in DB');
        $this->assertModelData($healthPredictor, $createdHealthPredictor);
    }

    /**
     * @test read
     */
    public function test_read_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->create();

        $dbHealthPredictor = $this->healthPredictorRepo->find($healthPredictor->id);

        $dbHealthPredictor = $dbHealthPredictor->toArray();
        $this->assertModelData($healthPredictor->toArray(), $dbHealthPredictor);
    }

    /**
     * @test update
     */
    public function test_update_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->create();
        $fakeHealthPredictor = HealthPredictor::factory()->make()->toArray();

        $updatedHealthPredictor = $this->healthPredictorRepo->update($fakeHealthPredictor, $healthPredictor->id);

        $this->assertModelData($fakeHealthPredictor, $updatedHealthPredictor->toArray());
        $dbHealthPredictor = $this->healthPredictorRepo->find($healthPredictor->id);
        $this->assertModelData($fakeHealthPredictor, $dbHealthPredictor->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->create();

        $resp = $this->healthPredictorRepo->delete($healthPredictor->id);

        $this->assertTrue($resp);
        $this->assertNull(HealthPredictor::find($healthPredictor->id), 'HealthPredictor should not exist in DB');
    }
}
