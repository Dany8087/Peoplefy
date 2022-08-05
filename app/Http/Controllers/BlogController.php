<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function bloglist(){
        $blogdata = Blog::all();
        return view('AdminPanel.bloglist',['blog'=>$blogdata]);
    }

    public function addblog(){
        return view('AdminPanel.addblog');
    }

    public function addingblog(Request $request){
        $request->validate([
            'Title'=>'required',
            'Created_by'=>'required',
            'Images_Author_Photo'=>'mimes:jpg,png,jpeg|max:5048',
            'Details'=>'required'
        ]);
        
        $image = $request->file('Images_Author_Photo')->store('public/BlogImg');
    
        $blogs = new Blog();
        $blogs->Title = $request->Title;
        $blogs->Created_by = $request->Created_by;
        $blogs->Images_Author_Photo = $image;
        $blogs->Details = $request->Details;
        $blogs->Facebook = $request->Facebook;
        $blogs->Twitter = $request->Twitter;
        $blogs->Instagram = $request->Instagram;
        $blogs->Linkedin = $request->Linkedin;
    
        $res = $blogs->save();
        
        if($res){
            return back()->with('success','Blog added successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
        // return view('AdminPanel.addblog');
    }

    public function updateblog($id){
        $blogdata = Blog::find($id);
        return view('AdminPanel.updateblog',['blog'=>$blogdata]);
    }

    public function updatingblog(){
        return view('AdminPanel.updateblog');
    }

    public function blogdetails($id){
        $blogdata = Blog::find($id);
        return view('AdminPanel.blogdetails',['blog'=>$blogdata]);
    }

    public function deleteblog($id){
        $blogdata = Blog::find($id);
        $blogdata->delete();
        return redirect('bloglist');
    }
}
    