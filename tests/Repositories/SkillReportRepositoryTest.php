<?php namespace Tests\Repositories;

use App\Models\SkillReport;
use App\Repositories\SkillReportRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class SkillReportRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var SkillReportRepository
     */
    protected $skillReportRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->skillReportRepo = \App::make(SkillReportRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_skill_report()
    {
        $skillReport = SkillReport::factory()->make()->toArray();

        $createdSkillReport = $this->skillReportRepo->create($skillReport);

        $createdSkillReport = $createdSkillReport->toArray();
        $this->assertArrayHasKey('id', $createdSkillReport);
        $this->assertNotNull($createdSkillReport['id'], 'Created SkillReport must have id specified');
        $this->assertNotNull(SkillReport::find($createdSkillReport['id']), 'SkillReport with given id must be in DB');
        $this->assertModelData($skillReport, $createdSkillReport);
    }

    /**
     * @test read
     */
    public function test_read_skill_report()
    {
        $skillReport = SkillReport::factory()->create();

        $dbSkillReport = $this->skillReportRepo->find($skillReport->id);

        $dbSkillReport = $dbSkillReport->toArray();
        $this->assertModelData($skillReport->toArray(), $dbSkillReport);
    }

    /**
     * @test update
     */
    public function test_update_skill_report()
    {
        $skillReport = SkillReport::factory()->create();
        $fakeSkillReport = SkillReport::factory()->make()->toArray();

        $updatedSkillReport = $this->skillReportRepo->update($fakeSkillReport, $skillReport->id);

        $this->assertModelData($fakeSkillReport, $updatedSkillReport->toArray());
        $dbSkillReport = $this->skillReportRepo->find($skillReport->id);
        $this->assertModelData($fakeSkillReport, $dbSkillReport->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_skill_report()
    {
        $skillReport = SkillReport::factory()->create();

        $resp = $this->skillReportRepo->delete($skillReport->id);

        $this->assertTrue($resp);
        $this->assertNull(SkillReport::find($skillReport->id), 'SkillReport should not exist in DB');
    }
}
