<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
 public function index(Post $post)
 {
     return view('index')->with(["posts" => $post->getPaginateByLimit()]);
 }
 public function show(Post $post)
 {
   return view('show')->with(["post" => $post]);
 }
}