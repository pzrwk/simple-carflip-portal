<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;

class DisplayController extends Controller
{
    public function index() {
        return view('index', [
            'advertisements' => Advertisement::simplePaginate(10)
        ]);
    }
}
