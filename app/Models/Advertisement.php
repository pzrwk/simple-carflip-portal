<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'location',
        'phone',
        'img',
        'price',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
