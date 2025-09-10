<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function addpost(){
        return view('admin.add_post');   
    }
    public function createpost(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;

        $image=$request->image; //test.jpg = 123545.jpg
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
        $post->image=$imagename;
        $post->user_name=Auth::User()->name;
        $post->user_id=Auth::User()->id;
        $post->save();

        if($post->save()){
            $request->image->move('img',$imagename);  
            return redirect()->route('admin.addpost')->with('status','Post Added Successfully');          
        }else{
            return redirect()->back()->with('fail','Something went wrong');
        }
        
        
    }

    public function allpost(){
        $post=Post::all();
        return view('admin.allpost',compact('post'));
    }

    public function updatePost($id){
        $post=Post::find($id);
        return view('admin.updatepost',compact('post'));
    }

    public function postupdate(Request $request, $id){
        $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $image=$request->image; //test.jpg = 123545.jpg
        if($image=$request->image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $post->image=$imagename;             
        }                        
        $post->user_name=Auth::User()->name;
        $post->user_id=Auth::User()->id;
        $post->save();
        if($post && $image=$request->image->save()){
            $request->image->move('img',$imagename);                       
        }
        return redirect()->route('admin.allpost')->with('status','Updated Successfully'); 
    }

    public function deletePost($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('admin.allpost')->with('status','Deleted Successfully'); 
    }


}
