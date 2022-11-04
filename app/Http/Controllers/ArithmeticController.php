<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function calculate(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'operation_type' => 'required|in:addition,subtraction,multiplication',
            'x' => 'required|numeric',
            'y' => 'required|numeric',
        ]);
        $operation_type = $request->operation_type;
        $x = $request->x;
        $y = $request->y;
        $result = 0;

        switch ($operation_type) {
            case 'addition':
                $result = $x + $y;
                break;
            case 'subtraction':
                $result = $x - $y;
                break;
            case 'multiplication':
                $result = $x * $y;
                break;
            default:
                $result = 0;
                break;
        }
        return response()->json([
            "slackUsername" => 'Johncode',
            "operation_type" => $operation_type,
            "result" => $result
        ])->header("Access-Control-Allow-Origin", config('cors.allowed_origins'))
            ->header("Access-Control-Allow-Methods", config('cors.allowed_methods'));
    }
}
