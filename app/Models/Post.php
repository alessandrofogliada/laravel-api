<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Technology;



class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text',
        'reading_time',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
