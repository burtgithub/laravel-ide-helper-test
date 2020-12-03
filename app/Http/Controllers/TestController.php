<?php

namespace App\Http\Controllers;
use App\Http\Models\TestDemo;

class TestController extends Controller
{
	public function test(){

	    $test   =   new TestDemo();

        $test->firstOrCreate();

    }

}
