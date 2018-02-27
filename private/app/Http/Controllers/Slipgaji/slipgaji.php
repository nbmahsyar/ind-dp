<?php

namespace App\Http\Controllers\Slipgaji;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Slipgaji extends Controller
{
    public function home(){
        return view('slipgaji.slip_gaji');
        // echo "here";
    }
}
