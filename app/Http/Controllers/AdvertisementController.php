<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    public function index() {
        return view('advertisement');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|min:5',
            'category' => 'required',
            'description' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'img' => 'required',
            'price' => 'required',
        ]);

        auth()->user()->advertisements()->create($request->only('title', 'category', 'description', 'location', 'phone', 'img', 'price'));

        return redirect()->route('index');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ads() {
        return $this->hasMany(Advertisement::class);
    }
}
