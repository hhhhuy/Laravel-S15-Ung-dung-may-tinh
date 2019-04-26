<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    const ADDITION = '+';
    const SUBTRACTION = '-';
    const MULTIPICATION = 'x';
    const DIVISION = '/';

    public function calculate(Request $request)
    {
        $number_1 = $request->number_1;
        $number_2 = $request->number_2;
        $operator = $request->operator;
//        dd($operator);
        switch ($operator) {
            case self::ADDITION:
                $result = $number_1 + $number_2;
                break;
            case self::SUBTRACTION:
                $result = $number_1 - $number_2;
                break;
            case self::MULTIPICATION:
                $result = $number_1 * $number_2;
                break;
            case self::DIVISION:
                if ($number_2 != 0) {
                    $result = $number_1 / $number_2;
                    break;
                } else {
                    $result = "Số bị chia phải khác 0";
                }
        }
//        dd($result);
        return view('result', compact('result'));
    }
}
