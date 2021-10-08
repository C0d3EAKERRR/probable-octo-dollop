<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;


class PagesController extends Controller
{
    

    public function index(){
       // $title = 'Welcome To Laravel';        
        //return view('pages.index')->with('title', $title);

        $posts = Post::orderBy('created_at','desc')->paginate(2);
        return view('pages.ecommerce')->with('posts', $posts);
    }

    public function about(){
        $title = 'About us';  
        return view('pages.about')->with('title', $title);

    }
    public function services(){        
        $data = array(
            'title' => 'Services',
            'services' => ['* Code and coding..', '* HardCoding coding!', '* Code and coding Code harder!!']
        );
        return view('pages.services')->with($data);

    }

   
}
