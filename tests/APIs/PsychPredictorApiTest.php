<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PsychPredictor;

class PsychPredictorApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/psych_predictors', $psychPredictor
        );

        $this->assertApiResponse($psychPredictor);
    }

    /**
     * @test
     */
    public function test_read_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/psych_predictors/'.$psychPredictor->id
        );

        $this->assertApiResponse($psychPredictor->toArray());
    }

    /**
     * @test
     */
    public function test_update_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->create();
        $editedPsychPredictor = PsychPredictor::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/psych_predictors/'.$psychPredictor->id,
            $editedPsychPredictor
        );

        $this->assertApiResponse($editedPsychPredictor);
    }

    /**
     * @test
     */
    public function test_delete_psych_predictor()
    {
        $psychPredictor = PsychPredictor::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/psych_predictors/'.$psychPredictor->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/psych_predictors/'.$psychPredictor->id
        );

        $this->response->assertStatus(404);
    }
}
