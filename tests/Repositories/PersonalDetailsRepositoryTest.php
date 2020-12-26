<?php namespace Tests\Repositories;

use App\Models\PersonalDetails;
use App\Repositories\PersonalDetailsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PersonalDetailsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PersonalDetailsRepository
     */
    protected $personalDetailsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->personalDetailsRepo = \App::make(PersonalDetailsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->make()->toArray();

        $createdPersonalDetails = $this->personalDetailsRepo->create($personalDetails);

        $createdPersonalDetails = $createdPersonalDetails->toArray();
        $this->assertArrayHasKey('id', $createdPersonalDetails);
        $this->assertNotNull($createdPersonalDetails['id'], 'Created PersonalDetails must have id specified');
        $this->assertNotNull(PersonalDetails::find($createdPersonalDetails['id']), 'PersonalDetails with given id must be in DB');
        $this->assertModelData($personalDetails, $createdPersonalDetails);
    }

    /**
     * @test read
     */
    public function test_read_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->create();

        $dbPersonalDetails = $this->personalDetailsRepo->find($personalDetails->id);

        $dbPersonalDetails = $dbPersonalDetails->toArray();
        $this->assertModelData($personalDetails->toArray(), $dbPersonalDetails);
    }

    /**
     * @test update
     */
    public function test_update_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->create();
        $fakePersonalDetails = PersonalDetails::factory()->make()->toArray();

        $updatedPersonalDetails = $this->personalDetailsRepo->update($fakePersonalDetails, $personalDetails->id);

        $this->assertModelData($fakePersonalDetails, $updatedPersonalDetails->toArray());
        $dbPersonalDetails = $this->personalDetailsRepo->find($personalDetails->id);
        $this->assertModelData($fakePersonalDetails, $dbPersonalDetails->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_personal_details()
    {
        $personalDetails = PersonalDetails::factory()->create();

        $resp = $this->personalDetailsRepo->delete($personalDetails->id);

        $this->assertTrue($resp);
        $this->assertNull(PersonalDetails::find($personalDetails->id), 'PersonalDetails should not exist in DB');
    }
}
