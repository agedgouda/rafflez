<?php

namespace App\Http\Controllers;

use App\Models\Drawing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $drawings = Drawing::all();
        return view('dashboard', compact('drawings'));
    }
}
