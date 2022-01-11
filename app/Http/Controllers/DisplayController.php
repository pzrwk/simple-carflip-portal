<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

class DisplayController extends Controller
{
    public function index() {
        $advertisements = Advertisement::all();

        return view('index', compact('advertisements'));
    }
}
