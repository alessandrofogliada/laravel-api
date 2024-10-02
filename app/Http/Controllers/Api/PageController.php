<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Technology;
use App\Models\Category;


class PageController extends Controller
{
    public function index (){

        // api che mi restituisce tutti i post  
        $posts = Post::all();
        
        $success = true;

        $response = [
            'success' => $success,
            'result' => $posts,
        ];

        return response()->json($response);
    }

    public function Technology(){
             // api che restitutisce tutte le tecnologie 
             $allTechnology = Technology::all();
        return response()->json($allTechnology);
    }

    public function Category(){
        // api che restitutisce tutte le categorie 
        $allCategory = Category::all();
           return response()->json($allCategory);
    }
}
 