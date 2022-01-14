<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;

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

    public function update(Request $request, Advertisement $advertisement) {
        $this->validate($request, [
            'title' => 'required|min:5',
            'category' => 'required',
            'description' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'img' => 'required',
            'price' => 'required',
        ]);

        $id = $advertisement->id;

        DB::update('update advertisements set title = ?, category = ?, description = ?, location = ?, phone = ?, img = ?, price = ? where id = ?', [$request->title, $request->category, $request->description, $request->location, $request->phone, $request->img, $request->price, $id]);

        return redirect()->route('index');
    }

    public function display(Advertisement $advertisement) {
        return view('edit', ['advertisement' => $advertisement]);
    }

    public function destroy(Advertisement $advertisement) {
        $advertisement->delete();

        return redirect()->route('index');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ads() {
        return $this->hasMany(Advertisement::class);
    }
}
