<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Test\Test;




use Illuminate\Http\Request;
use Illuminate\Support\Str;





class TestController extends Controller
{
    public function GetAllTests()
    {
        $tests = Test::all();

        if ($tests->isEmpty()) {
            return response()->json(['message' => 'No tests found.'], 404);
        }

        return response()->json($tests, 200, [], JSON_UNESCAPED_UNICODE);

    }

    public function GetTest($ID)
    {
        $test = Test::find($ID);

        if ($test === null) {
            return response()->json(['message' => 'No test found.'], 404);
        }

        return response()->json($test, 200, [], JSON_UNESCAPED_UNICODE);
    }


    public function PostTest(Request $request)
    {
        $test = Test::create($request->all());

        return response()->json($test, 201);
    }

    public function PostTest1(Request $request, $ID, $Column, $Column1)
    {
        $test = new Test;
        $test->ID = $ID;
        $test->Column = $Column;
        $test->Column1 = $Column1;
        $test->save();

        return response()->json($test, 201);
    }

    public function PostTest2(Request $request, $ID, $Column, $Column1)
    {
        $test = Test::create([
            'ID' => $ID,
            'Column' => $Column,
            'Column1' => $Column1,
        ]);

        return response()->json($test, 201);
    }


    public function PutTest(Request $request)
    {
        $test = Test::find($request->ID);

        if ($test === null) {
            return response()->json(['message' => 'No test found.'], 404);
        }

        $test->update($request->all());

        return response()->json($test, 200);
    }


    public function DeleteTest(Request $request)
    {
        $test = Test::find($request->ID);

        if ($test === null) {
            return response()->json(['message' => 'No test found.'], 404);
        }

        $test->delete();

        return response()->json(['message' => 'Test deleted.'], 200);
    }
    
}
