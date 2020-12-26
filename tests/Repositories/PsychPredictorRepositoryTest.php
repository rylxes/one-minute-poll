<?php namespace Tests\Repositories;

use App\Models\PsychPredictor;
use App\Repositories\PsychPredictorRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PsychPredictorRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PsychPredictorRepository
     */
    protected $psychPredictorRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->psychPredictorRepo = \App::make(PsychPredictorRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->make()->toArray();

        $createdPsychPredictor = $this->psychPredictorRepo->create($psychPredictor);

        $createdPsychPredictor = $createdPsychPredictor->toArray();
        $this->assertArrayHasKey('id', $createdPsychPredictor);
        $this->assertNotNull($createdPsychPredictor['id'], 'Created PsychPredictor must have id specified');
        $this->assertNotNull(PsychPredictor::find($createdPsychPredictor['id']), 'PsychPredictor with given id must be in DB');
        $this->assertModelData($psychPredictor, $createdPsychPredictor);
    }

    /**
     * @test read
     */
    public function test_read_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->create();

        $dbPsychPredictor = $this->psychPredictorRepo->find($psychPredictor->id);

        $dbPsychPredictor = $dbPsychPredictor->toArray();
        $this->assertModelData($psychPredictor->toArray(), $dbPsychPredictor);
    }

    /**
     * @test update
     */
    public function test_update_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->create();
        $fakePsychPredictor = PsychPredictor::factory()->make()->toArray();

        $updatedPsychPredictor = $this->psychPredictorRepo->update($fakePsychPredictor, $psychPredictor->id);

        $this->assertModelData($fakePsychPredictor, $updatedPsychPredictor->toArray());
        $dbPsychPredictor = $this->psychPredictorRepo->find($psychPredictor->id);
        $this->assertModelData($fakePsychPredictor, $dbPsychPredictor->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->create();

        $resp = $this->psychPredictorRepo->delete($psychPredictor->id);

        $this->assertTrue($resp);
        $this->assertNull(PsychPredictor::find($psychPredictor->id), 'PsychPredictor should not exist in DB');
    }
}
