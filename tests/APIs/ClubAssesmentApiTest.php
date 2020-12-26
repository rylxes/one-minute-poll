<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ClubAssesment;

class ClubAssesmentApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/club_assesments', $clubAssesment
        );

        $this->assertApiResponse($clubAssesment);
    }

    /**
     * @test
     */
    public function test_read_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/club_assesments/'.$clubAssesment->id
        );

        $this->assertApiResponse($clubAssesment->toArray());
    }

    /**
     * @test
     */
    public function test_update_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->create();
        $editedClubAssesment = ClubAssesment::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/club_assesments/'.$clubAssesment->id,
            $editedClubAssesment
        );

        $this->assertApiResponse($editedClubAssesment);
    }

    /**
     * @test
     */
    public function test_delete_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/club_assesments/'.$clubAssesment->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/club_assesments/'.$clubAssesment->id
        );

        $this->response->assertStatus(404);
    }
}
