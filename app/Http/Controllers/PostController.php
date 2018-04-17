<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Images;

class PostController extends Controller
{

         public function __construct(){

            $this->middleware('auth')->except('index','show');
            
        }

         public function create(){

    	return view('main.create');

    } 

    public function store(){

    	//dd(request()->all());

    	//validation

    	$this->validate(request(),[
    		'title' => 'required',
    		'resume' => 'required',
    		'description' => 'required'
    	
    		    	]);


    	$post = new Post;

    	$post->title= request('title');
    	$post->description= request('description');
    	$post->resume= request('resume');
    	$post->save();

        

    	
    	return redirect('/posts/main-images');
}

public function index(){

        //query to order the post by months (archives sidebar) temporary -> moved to Post.php and then to the view composer (app providers app service provider)

        

        //ordering the post by date, from latest to newest
            $posts = Post::latest();

            $posts = $posts->get();

            $images = Images::latest()->where("principal","=",true)->get();
        

        return view('main.index', compact('posts','images'));   

    }

    public function show($id){

        $post=Post::find($id);
        $images=Images::where("post_id","=",$id)->get();

        return view('main.show', compact('post','images')); 

    }

}