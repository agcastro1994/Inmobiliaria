<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Images;

use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function createMain(){

    	return view('main.main-images');

    } 

    public function create(){

    	return view('main.images');

    } 

    public function store(Request $request){

    	

    	$this->validate(request(),[
    		'archive' => 'required'    	
    		    	]);


    	$post = Post::latest()->first();
    	$id = $post->id;

    	
    	
    	$file = $request->file('archive');

    	$name = $file->getClientOriginalName();
 		// dd($file);

 		\Storage::disk('local')->put($name, \File::get($file));

 		$public_path = public_path('uploads');
        $url = '/uploads'.'/'.$name;

        $images = new Images;

        $images->post_id = $id;
    	$images->route= $url;
    	$images->principal= false;
    	$images->save();

    	    	// $user=Auth::user()->email;
    	// \Mail::to($user)->send(new Publication);
    	 return view('main.images');
		}

		public function storeMain(Request $request){

    	

    	$this->validate(request(),[
    		'archive' => 'required'    	
    		    	]);


    	$post = Post::latest()->first();
    	$id = $post->id;

    	
    	
    	$file = $request->file('archive');

    	$name = $file->getClientOriginalName();
 		// dd($file);

 		\Storage::disk('local')->put($name, \File::get($file));

 		$public_path = public_path('uploads');
        $url = '/uploads'.'/'.$name;

        $images = new Images;

        $images->post_id = $id;
    	$images->route= $url;
    	$images->principal= true;
    	$images->save();

    	    	
    	 return view('main.images');
		}
 }


