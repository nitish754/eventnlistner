<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(TestRequest $request){
        dd("hiiiiiiiiiiii");
    }
}
