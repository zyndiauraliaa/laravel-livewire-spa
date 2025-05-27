<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ✅ Semua field diizinkan untuk mass assignment
    protected $guarded = [];
}