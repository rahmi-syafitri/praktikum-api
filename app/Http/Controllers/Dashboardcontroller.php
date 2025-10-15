<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Dashboardcontroller extends Controller
{
    
    public function index(){

        $fakultas = Fakultas::all();

        return view('welcome', compact('fakultas'));
    }
}
