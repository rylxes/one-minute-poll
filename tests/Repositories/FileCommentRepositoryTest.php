<?php namespace Tests\Repositories;

use App\Models\FileComment;
use App\Repositories\FileCommentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class FileCommentRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var FileCommentRepository
     */
    protected $fileCommentRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->fileCommentRepo = \App::make(FileCommentRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_file_comment()
    {
        $fileComment = FileComment::factory()->make()->toArray();

        $createdFileComment = $this->fileCommentRepo->create($fileComment);

        $createdFileComment = $createdFileComment->toArray();
        $this->assertArrayHasKey('id', $createdFileComment);
        $this->assertNotNull($createdFileComment['id'], 'Created FileComment must have id specified');
        $this->assertNotNull(FileComment::find($createdFileComment['id']), 'FileComment with given id must be in DB');
        $this->assertModelData($fileComment, $createdFileComment);
    }

    /**
     * @test read
     */
    public function test_read_file_comment()
    {
        $fileComment = FileComment::factory()->create();

        $dbFileComment = $this->fileCommentRepo->find($fileComment->id);

        $dbFileComment = $dbFileComment->toArray();
        $this->assertModelData($fileComment->toArray(), $dbFileComment);
    }

    /**
     * @test update
     */
    public function test_update_file_comment()
    {
        $fileComment = FileComment::factory()->create();
        $fakeFileComment = FileComment::factory()->make()->toArray();

        $updatedFileComment = $this->fileCommentRepo->update($fakeFileComment, $fileComment->id);

        $this->assertModelData($fakeFileComment, $updatedFileComment->toArray());
        $dbFileComment = $this->fileCommentRepo->find($fileComment->id);
        $this->assertModelData($fakeFileComment, $dbFileComment->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_file_comment()
    {
        $fileComment = FileComment::factory()->create();

        $resp = $this->fileCommentRepo->delete($fileComment->id);

        $this->assertTrue($resp);
        $this->assertNull(FileComment::find($fileComment->id), 'FileComment should not exist in DB');
    }
}
