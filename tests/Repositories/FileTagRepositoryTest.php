<?php namespace Tests\Repositories;

use App\Models\FileTag;
use App\Repositories\FileTagRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class FileTagRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var FileTagRepository
     */
    protected $fileTagRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->fileTagRepo = \App::make(FileTagRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_file_tag()
    {
        $fileTag = FileTag::factory()->make()->toArray();

        $createdFileTag = $this->fileTagRepo->create($fileTag);

        $createdFileTag = $createdFileTag->toArray();
        $this->assertArrayHasKey('id', $createdFileTag);
        $this->assertNotNull($createdFileTag['id'], 'Created FileTag must have id specified');
        $this->assertNotNull(FileTag::find($createdFileTag['id']), 'FileTag with given id must be in DB');
        $this->assertModelData($fileTag, $createdFileTag);
    }

    /**
     * @test read
     */
    public function test_read_file_tag()
    {
        $fileTag = FileTag::factory()->create();

        $dbFileTag = $this->fileTagRepo->find($fileTag->id);

        $dbFileTag = $dbFileTag->toArray();
        $this->assertModelData($fileTag->toArray(), $dbFileTag);
    }

    /**
     * @test update
     */
    public function test_update_file_tag()
    {
        $fileTag = FileTag::factory()->create();
        $fakeFileTag = FileTag::factory()->make()->toArray();

        $updatedFileTag = $this->fileTagRepo->update($fakeFileTag, $fileTag->id);

        $this->assertModelData($fakeFileTag, $updatedFileTag->toArray());
        $dbFileTag = $this->fileTagRepo->find($fileTag->id);
        $this->assertModelData($fakeFileTag, $dbFileTag->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_file_tag()
    {
        $fileTag = FileTag::factory()->create();

        $resp = $this->fileTagRepo->delete($fileTag->id);

        $this->assertTrue($resp);
        $this->assertNull(FileTag::find($fileTag->id), 'FileTag should not exist in DB');
    }
}
