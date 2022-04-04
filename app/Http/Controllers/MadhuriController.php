<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MadhuriController extends Controller
{
    public function delete(Request $request) {
        
        $mridula=DB::statement("DELETE FROM `emptbl` WHERE usrname=?",[$request->usrname]);
        }
    }    

