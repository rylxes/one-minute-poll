<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PersonalDetails;

class PersonalDetailsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/personal_details', $personalDetails
        );

        $this->assertApiResponse($personalDetails);
    }

    /**
     * @test
     */
    public function test_read_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/personal_details/'.$personalDetails->id
        );

        $this->assertApiResponse($personalDetails->toArray());
    }

    /**
     * @test
     */
    public function test_update_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->create();
        $editedPersonalDetails = PersonalDetails::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/personal_details/'.$personalDetails->id,
            $editedPersonalDetails
        );

        $this->assertApiResponse($editedPersonalDetails);
    }

    /**
     * @test
     */
    public function test_delete_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/personal_details/'.$personalDetails->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/personal_details/'.$personalDetails->id
        );

        $this->response->assertStatus(404);
    }
}
