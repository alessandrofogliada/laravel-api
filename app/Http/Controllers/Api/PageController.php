<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index (){

        // api che mi restituisce tutti i post  
        $posts = Post::all();

        return response()->json($posts);
      
    }
}
 