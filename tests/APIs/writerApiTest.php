<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\writer;

class writerApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_writer()
    {
        $writer = writer::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/writers', $writer
        );

        $this->assertApiResponse($writer);
    }

    /**
     * @test
     */
    public function test_read_writer()
    {
        $writer = writer::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/writers/'.$writer->id
        );

        $this->assertApiResponse($writer->toArray());
    }

    /**
     * @test
     */
    public function test_update_writer()
    {
        $writer = writer::factory()->create();
        $editedwriter = writer::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/writers/'.$writer->id,
            $editedwriter
        );

        $this->assertApiResponse($editedwriter);
    }

    /**
     * @test
     */
    public function test_delete_writer()
    {
        $writer = writer::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/writers/'.$writer->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/writers/'.$writer->id
        );

        $this->response->assertStatus(404);
    }
}
