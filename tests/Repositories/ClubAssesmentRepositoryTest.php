<?php namespace Tests\Repositories;

use App\Models\ClubAssesment;
use App\Repositories\ClubAssesmentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ClubAssesmentRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ClubAssesmentRepository
     */
    protected $clubAssesmentRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->clubAssesmentRepo = \App::make(ClubAssesmentRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->make()->toArray();

        $createdClubAssesment = $this->clubAssesmentRepo->create($clubAssesment);

        $createdClubAssesment = $createdClubAssesment->toArray();
        $this->assertArrayHasKey('id', $createdClubAssesment);
        $this->assertNotNull($createdClubAssesment['id'], 'Created ClubAssesment must have id specified');
        $this->assertNotNull(ClubAssesment::find($createdClubAssesment['id']), 'ClubAssesment with given id must be in DB');
        $this->assertModelData($clubAssesment, $createdClubAssesment);
    }

    /**
     * @test read
     */
    public function test_read_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->create();

        $dbClubAssesment = $this->clubAssesmentRepo->find($clubAssesment->id);

        $dbClubAssesment = $dbClubAssesment->toArray();
        $this->assertModelData($clubAssesment->toArray(), $dbClubAssesment);
    }

    /**
     * @test update
     */
    public function test_update_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->create();
        $fakeClubAssesment = ClubAssesment::factory()->make()->toArray();

        $updatedClubAssesment = $this->clubAssesmentRepo->update($fakeClubAssesment, $clubAssesment->id);

        $this->assertModelData($fakeClubAssesment, $updatedClubAssesment->toArray());
        $dbClubAssesment = $this->clubAssesmentRepo->find($clubAssesment->id);
        $this->assertModelData($fakeClubAssesment, $dbClubAssesment->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_club_assesment()
    {
        $clubAssesment = ClubAssesment::factory()->create();

        $resp = $this->clubAssesmentRepo->delete($clubAssesment->id);

        $this->assertTrue($resp);
        $this->assertNull(ClubAssesment::find($clubAssesment->id), 'ClubAssesment should not exist in DB');
    }
}
