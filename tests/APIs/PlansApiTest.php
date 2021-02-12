<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Plans;

class PlansApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_plans()
    {
        $plans = Plans::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/plans', $plans
        );

        $this->assertApiResponse($plans);
    }

    /**
     * @test
     */
    public function test_read_plans()
    {
        $plans = Plans::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/plans/'.$plans->id
        );

        $this->assertApiResponse($plans->toArray());
    }

    /**
     * @test
     */
    public function test_update_plans()
    {
        $plans = Plans::factory()->create();
        $editedPlans = Plans::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/plans/'.$plans->id,
            $editedPlans
        );

        $this->assertApiResponse($editedPlans);
    }

    /**
     * @test
     */
    public function test_delete_plans()
    {
        $plans = Plans::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/plans/'.$plans->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/plans/'.$plans->id
        );

        $this->response->assertStatus(404);
    }
}
