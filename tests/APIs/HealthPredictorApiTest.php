<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\HealthPredictor;

class HealthPredictorApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/health_predictors', $healthPredictor
        );

        $this->assertApiResponse($healthPredictor);
    }

    /**
     * @test
     */
    public function test_read_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/health_predictors/'.$healthPredictor->id
        );

        $this->assertApiResponse($healthPredictor->toArray());
    }

    /**
     * @test
     */
    public function test_update_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->create();
        $editedHealthPredictor = HealthPredictor::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/health_predictors/'.$healthPredictor->id,
            $editedHealthPredictor
        );

        $this->assertApiResponse($editedHealthPredictor);
    }

    /**
     * @test
     */
    public function test_delete_health_predictor()
    {
        $healthPredictor = HealthPredictor::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/health_predictors/'.$healthPredictor->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/health_predictors/'.$healthPredictor->id
        );

        $this->response->assertStatus(404);
    }
}
