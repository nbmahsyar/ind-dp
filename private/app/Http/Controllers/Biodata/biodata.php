<?php

namespace App\Http\Controllers\Biodata;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Biodata extends Controller
{
    public function home(){
        return view('biodata.biodata');
        // echo "here";
    }
}
