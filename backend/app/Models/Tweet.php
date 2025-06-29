<?php

// app/Models/Tweet.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'image_path',
    ];

    public function user()
{
    return $this->belongsTo(\App\Models\User::class);
}
}
