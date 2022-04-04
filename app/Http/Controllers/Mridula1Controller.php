<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mridula1Controller extends Controller
{
    

    public function add(Request $request) {
        
    $mridula=DB::statement("INSERT INTO emptbl(userid, passwd, usrname) VALUES (?,?,?)",[$request->userid,$request->passwd,$request->usrname]);
    }
}
