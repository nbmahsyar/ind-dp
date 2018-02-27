<?php

namespace App\Http\Controllers\Rekapitulasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Rekapkeseluruhan extends Controller
{
    public function home(){
        return view('rekapitulasi.rekap_keseluruhan');
        // echo "here";
    }
}
