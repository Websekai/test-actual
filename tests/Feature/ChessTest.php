<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChessTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_chessPage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_chessContent()
    {
        //Check the presense of squares A1 and H8
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('class="board"', false);
        $response->assertSee('A1', false);
        $response->assertSee('H8', false);
    }
}
