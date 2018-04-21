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
            $posts = Post::latest()->paginate(6);

            // $posts = $posts->get();

            $images = Images::latest()->where("principal","=",true)->get();

            
 
    
        

        return view('main.index', compact('posts','images'));   

    }

    public function show($id){

        $post=Post::find($id);
        $images=Images::where("post_id","=",$id)->get();

        return view('main.show', compact('post','images')); 

    }

    public function edit($id){

         $post=Post::find($id);
        

     return view('main.edit', compact('post')); 

     }

    // public function editResume($id){

    //     $post=Post::find($id);
        

    //     return view('main.resume', compact('post')); 

    // }

    // public function editDescription($id){

    //     $post=Post::find($id);
        

    //     return view('main.description', compact('post')); 

    // }

    public function editStore($id){
       $post = Post::find($id);

        $post->title= request('title');
        $post->description= request('description');
        $post->resume= request('resume');
        $post->save();

        
        return redirect('/home');

    } 

    public function delete($id) {
   $post = Post::find($id);

   if($post == null)
       return "No existe este post";
   else
       $post->delete();

   return redirect('/home');
    }

    public function deleteImage ($id) {
   $image = Images::find($id);

   if($image == null)
       return "No existe la imagen";
   else
       $image->delete();

   return back();



}

}