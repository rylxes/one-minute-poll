<?php namespace Tests\Repositories;

use App\Models\FolderFile;
use App\Repositories\FolderFileRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class FolderFileRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var FolderFileRepository
     */
    protected $folderFileRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->folderFileRepo = \App::make(FolderFileRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_folder_file()
    {
        $folderFile = FolderFile::factory()->make()->toArray();

        $createdFolderFile = $this->folderFileRepo->create($folderFile);

        $createdFolderFile = $createdFolderFile->toArray();
        $this->assertArrayHasKey('id', $createdFolderFile);
        $this->assertNotNull($createdFolderFile['id'], 'Created FolderFile must have id specified');
        $this->assertNotNull(FolderFile::find($createdFolderFile['id']), 'FolderFile with given id must be in DB');
        $this->assertModelData($folderFile, $createdFolderFile);
    }

    /**
     * @test read
     */
    public function test_read_folder_file()
    {
        $folderFile = FolderFile::factory()->create();

        $dbFolderFile = $this->folderFileRepo->find($folderFile->id);

        $dbFolderFile = $dbFolderFile->toArray();
        $this->assertModelData($folderFile->toArray(), $dbFolderFile);
    }

    /**
     * @test update
     */
    public function test_update_folder_file()
    {
        $folderFile = FolderFile::factory()->create();
        $fakeFolderFile = FolderFile::factory()->make()->toArray();

        $updatedFolderFile = $this->folderFileRepo->update($fakeFolderFile, $folderFile->id);

        $this->assertModelData($fakeFolderFile, $updatedFolderFile->toArray());
        $dbFolderFile = $this->folderFileRepo->find($folderFile->id);
        $this->assertModelData($fakeFolderFile, $dbFolderFile->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_folder_file()
    {
        $folderFile = FolderFile::factory()->create();

        $resp = $this->folderFileRepo->delete($folderFile->id);

        $this->assertTrue($resp);
        $this->assertNull(FolderFile::find($folderFile->id), 'FolderFile should not exist in DB');
    }
}
