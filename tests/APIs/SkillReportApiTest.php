<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\SkillReport;

class SkillReportApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_skill_report()
    {
        $skillReport = SkillReport::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/skill_reports', $skillReport
        );

        $this->assertApiResponse($skillReport);
    }

    /**
     * @test
     */
    public function test_read_skill_report()
    {
        $skillReport = SkillReport::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/skill_reports/'.$skillReport->id
        );

        $this->assertApiResponse($skillReport->toArray());
    }

    /**
     * @test
     */
    public function test_update_skill_report()
    {
        $skillReport = SkillReport::factory()->create();
        $editedSkillReport = SkillReport::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/skill_reports/'.$skillReport->id,
            $editedSkillReport
        );

        $this->assertApiResponse($editedSkillReport);
    }

    /**
     * @test
     */
    public function test_delete_skill_report()
    {
        $skillReport = SkillReport::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/skill_reports/'.$skillReport->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/skill_reports/'.$skillReport->id
        );

        $this->response->assertStatus(404);
    }
}
