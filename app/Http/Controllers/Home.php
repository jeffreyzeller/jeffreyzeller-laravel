<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        return view('home', [
            'portfolio' => Portfolio::latest()->limit(6)->get()
        ]);
    }
}
