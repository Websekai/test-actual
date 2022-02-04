<?php

namespace App\Http\Controllers;

use App\Http\Requests\FibonacciRequest;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index() {
        return view('fibonacci');
    }

    /**
     * generate a fibonacci suite and validate the input
     *
     * @param  FibonacciRequest  $request
     */
    public function postFibonacci(FibonacciRequest $request) {
        $listSize = $request->fibonacci_size;
        $fibonacciNumbers = self::getFibonacci($listSize);
        return view('fibonacci', ['fibonacciNumbers'=>$fibonacciNumbers, 'size' => $listSize]);
    }

    /**
     * @param integer $listSize size of the list to generate
     * @return array
     */
    public static function getFibonacci($listSize) {
        $number1 = 0;
        $number2 = 1;
        $fibonacciNumbers = [];
        if($listSize>0) {
            $fibonacciNumbers[] = $number1;
        }
        if($listSize>1) {
            $fibonacciNumbers[] = $number2;
        }

        //-2 because we manualy add the firsts 0 and 1
        for ($i=0; $i<$listSize-2; $i++) {
            $number3 = $number1+$number2;
            $fibonacciNumbers[] = $number3;
            $number1 = $number2;
            $number2 = $number3;
        }
        return $fibonacciNumbers;
    }
}
