<?php

namespace App\Http\Controllers\Datamaster;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Instansi extends Controller
{
    public function home(){
        return view('datamaster.instansi');
        // echo "here";
    }
}
