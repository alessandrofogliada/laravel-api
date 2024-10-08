<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Technology extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongToMany(Post::class);
    }
}
