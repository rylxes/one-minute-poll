<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\SkillTest;

class SkillTestApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_skill_test()
    {
        $skillTest = SkillTest::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/skill_tests', $skillTest
        );

        $this->assertApiResponse($skillTest);
    }

    /**
     * @test
     */
    public function test_read_skill_test()
    {
        $skillTest = SkillTest::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/skill_tests/'.$skillTest->id
        );

        $this->assertApiResponse($skillTest->toArray());
    }

    /**
     * @test
     */
    public function test_update_skill_test()
    {
        $skillTest = SkillTest::factory()->create();
        $editedSkillTest = SkillTest::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/skill_tests/'.$skillTest->id,
            $editedSkillTest
        );

        $this->assertApiResponse($editedSkillTest);
    }

    /**
     * @test
     */
    public function test_delete_skill_test()
    {
        $skillTest = SkillTest::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/skill_tests/'.$skillTest->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/skill_tests/'.$skillTest->id
        );

        $this->response->assertStatus(404);
    }
}
