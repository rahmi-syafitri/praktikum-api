<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\prodi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){

        $fakultas = Fakultas::count();
        $prodi = prodi::count();

        return view('welcome', compact('fakultas','prodi'));
    }
}
