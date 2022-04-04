<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function studentslist(Request $request) {
        $studdata=DB::select("SELECT * FROM usertbl WHERE userid=? AND passwd=?",[$request->userid,$request->passwd]);
        return $studdata;
    }
}
