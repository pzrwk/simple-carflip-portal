<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;

class ItemController extends Controller
{
    public function index(Advertisement $advertisement) {
        return view('details', ['advertisement' => $advertisement]);
    }
}
