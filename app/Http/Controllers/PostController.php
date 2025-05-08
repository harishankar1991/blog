<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){
        $title = "JVL code laravel";
        $posts = Post::all();
        // $posts = $this->getposts();
        
        // return view('posts.index',['title' => $title]);
        return view('posts.index',compact('title','posts'));
    }   
    
    private function getposts(){
        $posts = [
            ['id'=>'1','title'=>'post1','content'=>'content of post 1'],
            ['id'=>'2','title'=>'post3', 'content'=>'content of post 2']
        ];
        $posts =  json_decode(json_encode($posts));
        return $posts;
    }

    public function details($id){
        // $posts = $this->getposts();
        // $post = collect($posts)->firstWhere('id',$id);
     
    try{
        $post = Post::findOrFail($id);
        return view('posts.details', compact('post'));
    
    }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $ex){
       return response()->view('errors.404',[],404);
    }

    }

    public function oldurl(){
            return redirect()->route('new_url');
    }

    public function newurl(){
        return "<h1> this one is new url page </h1>";
    }
}