<?php namespace Tests\Repositories;

use App\Models\Library;
use App\Repositories\LibraryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class LibraryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var LibraryRepository
     */
    protected $libraryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->libraryRepo = \App::make(LibraryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_library()
    {
        $library = Library::factory()->make()->toArray();

        $createdLibrary = $this->libraryRepo->create($library);

        $createdLibrary = $createdLibrary->toArray();
        $this->assertArrayHasKey('id', $createdLibrary);
        $this->assertNotNull($createdLibrary['id'], 'Created Library must have id specified');
        $this->assertNotNull(Library::find($createdLibrary['id']), 'Library with given id must be in DB');
        $this->assertModelData($library, $createdLibrary);
    }

    /**
     * @test read
     */
    public function test_read_library()
    {
        $library = Library::factory()->create();

        $dbLibrary = $this->libraryRepo->find($library->id);

        $dbLibrary = $dbLibrary->toArray();
        $this->assertModelData($library->toArray(), $dbLibrary);
    }

    /**
     * @test update
     */
    public function test_update_library()
    {
        $library = Library::factory()->create();
        $fakeLibrary = Library::factory()->make()->toArray();

        $updatedLibrary = $this->libraryRepo->update($fakeLibrary, $library->id);

        $this->assertModelData($fakeLibrary, $updatedLibrary->toArray());
        $dbLibrary = $this->libraryRepo->find($library->id);
        $this->assertModelData($fakeLibrary, $dbLibrary->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_library()
    {
        $library = Library::factory()->create();

        $resp = $this->libraryRepo->delete($library->id);

        $this->assertTrue($resp);
        $this->assertNull(Library::find($library->id), 'Library should not exist in DB');
    }
}
