<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FTP extends Controller
{
    //
    public function download(Request $request){
        return response()->download(storage_path("app/public/Curriculo_GabrielM-2018%2F02-Simples.pdf"));
    }
}
