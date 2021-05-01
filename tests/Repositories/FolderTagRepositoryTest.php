<?php namespace Tests\Repositories;

use App\Models\FolderTag;
use App\Repositories\FolderTagRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class FolderTagRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var FolderTagRepository
     */
    protected $folderTagRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->folderTagRepo = \App::make(FolderTagRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_folder_tag()
    {
        $folderTag = FolderTag::factory()->make()->toArray();

        $createdFolderTag = $this->folderTagRepo->create($folderTag);

        $createdFolderTag = $createdFolderTag->toArray();
        $this->assertArrayHasKey('id', $createdFolderTag);
        $this->assertNotNull($createdFolderTag['id'], 'Created FolderTag must have id specified');
        $this->assertNotNull(FolderTag::find($createdFolderTag['id']), 'FolderTag with given id must be in DB');
        $this->assertModelData($folderTag, $createdFolderTag);
    }

    /**
     * @test read
     */
    public function test_read_folder_tag()
    {
        $folderTag = FolderTag::factory()->create();

        $dbFolderTag = $this->folderTagRepo->find($folderTag->id);

        $dbFolderTag = $dbFolderTag->toArray();
        $this->assertModelData($folderTag->toArray(), $dbFolderTag);
    }

    /**
     * @test update
     */
    public function test_update_folder_tag()
    {
        $folderTag = FolderTag::factory()->create();
        $fakeFolderTag = FolderTag::factory()->make()->toArray();

        $updatedFolderTag = $this->folderTagRepo->update($fakeFolderTag, $folderTag->id);

        $this->assertModelData($fakeFolderTag, $updatedFolderTag->toArray());
        $dbFolderTag = $this->folderTagRepo->find($folderTag->id);
        $this->assertModelData($fakeFolderTag, $dbFolderTag->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_folder_tag()
    {
        $folderTag = FolderTag::factory()->create();

        $resp = $this->folderTagRepo->delete($folderTag->id);

        $this->assertTrue($resp);
        $this->assertNull(FolderTag::find($folderTag->id), 'FolderTag should not exist in DB');
    }
}
