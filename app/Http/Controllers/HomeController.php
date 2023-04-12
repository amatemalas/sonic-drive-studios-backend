<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $works = Work::orderByDesc('year')->orderBy('name')->get();
        return view('frontend.pages.home', compact('works'));
    }

    public function calculator()
    {
        return view('frontend.pages.calculator');
    }
}
