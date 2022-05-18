<?php namespace Tests\Repositories;

use App\Models\writer;
use App\Repositories\writerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class writerRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var writerRepository
     */
    protected $writerRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->writerRepo = \App::make(writerRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_writer()
    {
        $writer = writer::factory()->make()->toArray();

        $createdwriter = $this->writerRepo->create($writer);

        $createdwriter = $createdwriter->toArray();
        $this->assertArrayHasKey('id', $createdwriter);
        $this->assertNotNull($createdwriter['id'], 'Created writer must have id specified');
        $this->assertNotNull(writer::find($createdwriter['id']), 'writer with given id must be in DB');
        $this->assertModelData($writer, $createdwriter);
    }

    /**
     * @test read
     */
    public function test_read_writer()
    {
        $writer = writer::factory()->create();

        $dbwriter = $this->writerRepo->find($writer->id);

        $dbwriter = $dbwriter->toArray();
        $this->assertModelData($writer->toArray(), $dbwriter);
    }

    /**
     * @test update
     */
    public function test_update_writer()
    {
        $writer = writer::factory()->create();
        $fakewriter = writer::factory()->make()->toArray();

        $updatedwriter = $this->writerRepo->update($fakewriter, $writer->id);

        $this->assertModelData($fakewriter, $updatedwriter->toArray());
        $dbwriter = $this->writerRepo->find($writer->id);
        $this->assertModelData($fakewriter, $dbwriter->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_writer()
    {
        $writer = writer::factory()->create();

        $resp = $this->writerRepo->delete($writer->id);

        $this->assertTrue($resp);
        $this->assertNull(writer::find($writer->id), 'writer should not exist in DB');
    }
}
