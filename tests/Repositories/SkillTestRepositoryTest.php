<?php namespace Tests\Repositories;

use App\Models\SkillTest;
use App\Repositories\SkillTestRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class SkillTestRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var SkillTestRepository
     */
    protected $skillTestRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->skillTestRepo = \App::make(SkillTestRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_skill_test()
    {
        $skillTest = SkillTest::factory()->make()->toArray();

        $createdSkillTest = $this->skillTestRepo->create($skillTest);

        $createdSkillTest = $createdSkillTest->toArray();
        $this->assertArrayHasKey('id', $createdSkillTest);
        $this->assertNotNull($createdSkillTest['id'], 'Created SkillTest must have id specified');
        $this->assertNotNull(SkillTest::find($createdSkillTest['id']), 'SkillTest with given id must be in DB');
        $this->assertModelData($skillTest, $createdSkillTest);
    }

    /**
     * @test read
     */
    public function test_read_skill_test()
    {
        $skillTest = SkillTest::factory()->create();

        $dbSkillTest = $this->skillTestRepo->find($skillTest->id);

        $dbSkillTest = $dbSkillTest->toArray();
        $this->assertModelData($skillTest->toArray(), $dbSkillTest);
    }

    /**
     * @test update
     */
    public function test_update_skill_test()
    {
        $skillTest = SkillTest::factory()->create();
        $fakeSkillTest = SkillTest::factory()->make()->toArray();

        $updatedSkillTest = $this->skillTestRepo->update($fakeSkillTest, $skillTest->id);

        $this->assertModelData($fakeSkillTest, $updatedSkillTest->toArray());
        $dbSkillTest = $this->skillTestRepo->find($skillTest->id);
        $this->assertModelData($fakeSkillTest, $dbSkillTest->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_skill_test()
    {
        $skillTest = SkillTest::factory()->create();

        $resp = $this->skillTestRepo->delete($skillTest->id);

        $this->assertTrue($resp);
        $this->assertNull(SkillTest::find($skillTest->id), 'SkillTest should not exist in DB');
    }
}
