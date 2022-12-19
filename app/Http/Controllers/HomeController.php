<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('frontend.pages.home', compact('works'));
    }

    public function calculator()
    {
        return view('frontend.pages.calculator');
    }
}
