<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CandidacyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get200()
    {
        $response = $this->get('/api/candidacy');
        $data = $response->decodeResponseJson();
        $response->assertStatus(200);
    }

    public function test_title() {
        //Seed registered at least 1 candidacy for the first offer
        $response = $this->get('/api/candidacy/1');
        $data = $response->decodeResponseJson();
        if(!empty($data)) {
            $this->assertTrue($data['title'] === "Recrute dev javascript 1");
        } else {
            $this->fail("No data");
        }
    }
    public function test_candidacy() {
        //Seed registered at least 1 candidacy for the first offer
        $response = $this->get('/api/candidacy/1');
        $data = $response->decodeResponseJson();
        $this->assertTrue(!empty($data['candidacies']) && count($data['candidacies']) > 0);
    }
}
