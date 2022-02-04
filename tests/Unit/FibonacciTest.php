<?php

namespace Tests\Unit;

use App\Http\Controllers\FibonacciController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_fibonacci()
    {
        $listSize = 5;
        $fibList = FibonacciController::getFibonacci($listSize);
        $this->assertTrue(count($fibList) === $listSize);
    }
}
