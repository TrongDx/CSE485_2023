<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class MyPostController extends Controller
{
    //
    public function getAllPost(){
        // $posts = DB::select("select * from posts"); //Raw data
        $posts = DB::table('posts')->get();
        // $post = post::all();
        return $posts;
    }

    public function getPostById($id){
        // $post = DB::select("select * from posts where id =".$id);
        // $post = DB::table('posts')->where('id', $id)->get();
        $post = Post::where('id', $id)->get();
        return $post;
    }

    public function update($id){
        $post = Post::find($id);
        $post->title = 'Trongdx';
        $post->save();
    }
}
