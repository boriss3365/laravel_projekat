<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function featured(){
        $blogs=Blog::all()->where("published","=", true)->where("featured");
        return view("blog.blogs",['blogs'=>$blogs]);
    }
    function blogs(){
        $blogs=Blog::all()->where("published");
        return view("blog.blogs",['blogs'=>$blogs]);
    }

    function blog($id){
        $blog= Blog::findOrFail($id);
        return view("blog.blog", ['blog'=>$blog]);
    }
}
