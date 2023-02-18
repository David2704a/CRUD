<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class HomeController extends Controller
{
    //
    public function index()
    {
        $files = File::all();

        return view('home.index', compact('files'));
    }

    public function perfil(){
        return view('home.perfil');
    }
}
