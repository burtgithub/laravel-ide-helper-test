<?php

namespace App\Http\Controllers;
use App\Http\Models\TestDemo;

class ShareController extends Controller
{
	public function test(){

	    $test   =   new TestDemo();

        $test->firstOrCreate();

    }

}
