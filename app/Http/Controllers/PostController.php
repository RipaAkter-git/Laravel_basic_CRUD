<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return view('create');
    }

    public function filestore(Request $request) {

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg, jpeg, png',
        ]);      

        //Upload image 
        $imageName = null;
        if(isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        //Add new post
        $post = new Post; 

        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();      

        flash()->success('Your post has been successfully created.');

        return redirect()->route('home');     //back to specific route or page after form submition with success message

        //return redirect()->back();      //back to previous page after form submition
    }


    public function editData($id) {

        $post = Post::findOrfail($id);

        return view('edit', ['ourPost'=> $post]);
    }


    public function updateData($id, Request $request) {

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpg, jpeg, png',
        ]);      

        $post = Post::findOrfail($id);
        $post->name = $request->name;
        $post->description = $request->description;

        //Upload image 
        if(isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }

        $post->save();      

        flash()->success('Your post has been updated.');

        return redirect()->route('home');   
    }

    public function deleteData($id) {

        $post = Post::findOrfail($id);

        $post -> delete();

        flash()->success('Your post has been deleted.');

        return redirect()->route('home');

        //return redirect()->route('home')->with('success', 'Item successfully deleted!!!');
    }

}
