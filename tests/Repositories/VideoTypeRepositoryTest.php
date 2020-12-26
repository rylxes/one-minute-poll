<?php namespace Tests\Repositories;

use App\Models\VideoType;
use App\Repositories\VideoTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class VideoTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var VideoTypeRepository
     */
    protected $videoTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->videoTypeRepo = \App::make(VideoTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_video_type()
    {
        $videoType = VideoType::factory()->make()->toArray();

        $createdVideoType = $this->videoTypeRepo->create($videoType);

        $createdVideoType = $createdVideoType->toArray();
        $this->assertArrayHasKey('id', $createdVideoType);
        $this->assertNotNull($createdVideoType['id'], 'Created VideoType must have id specified');
        $this->assertNotNull(VideoType::find($createdVideoType['id']), 'VideoType with given id must be in DB');
        $this->assertModelData($videoType, $createdVideoType);
    }

    /**
     * @test read
     */
    public function test_read_video_type()
    {
        $videoType = VideoType::factory()->create();

        $dbVideoType = $this->videoTypeRepo->find($videoType->id);

        $dbVideoType = $dbVideoType->toArray();
        $this->assertModelData($videoType->toArray(), $dbVideoType);
    }

    /**
     * @test update
     */
    public function test_update_video_type()
    {
        $videoType = VideoType::factory()->create();
        $fakeVideoType = VideoType::factory()->make()->toArray();

        $updatedVideoType = $this->videoTypeRepo->update($fakeVideoType, $videoType->id);

        $this->assertModelData($fakeVideoType, $updatedVideoType->toArray());
        $dbVideoType = $this->videoTypeRepo->find($videoType->id);
        $this->assertModelData($fakeVideoType, $dbVideoType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_video_type()
    {
        $videoType = VideoType::factory()->create();

        $resp = $this->videoTypeRepo->delete($videoType->id);

        $this->assertTrue($resp);
        $this->assertNull(VideoType::find($videoType->id), 'VideoType should not exist in DB');
    }
}
