<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\VideoType;

class VideoTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_video_type()
    {
        $videoType = VideoType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/video_types', $videoType
        );

        $this->assertApiResponse($videoType);
    }

    /**
     * @test
     */
    public function test_read_video_type()
    {
        $videoType = VideoType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/video_types/'.$videoType->id
        );

        $this->assertApiResponse($videoType->toArray());
    }

    /**
     * @test
     */
    public function test_update_video_type()
    {
        $videoType = VideoType::factory()->create();
        $editedVideoType = VideoType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/video_types/'.$videoType->id,
            $editedVideoType
        );

        $this->assertApiResponse($editedVideoType);
    }

    /**
     * @test
     */
    public function test_delete_video_type()
    {
        $videoType = VideoType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/video_types/'.$videoType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/video_types/'.$videoType->id
        );

        $this->response->assertStatus(404);
    }
}
