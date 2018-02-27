<?php

namespace App\Http\Controllers\Rekapitulasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class Rekapinstansi extends Controller
{
    public function home(){
        return view('rekapitulasi.rekap_instansi');
        // echo "here";
    }
}
