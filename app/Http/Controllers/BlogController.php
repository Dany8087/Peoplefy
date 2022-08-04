<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function bloglist(){
        return view('AdminPanel.bloglist');
    }

    public function addblog(){
        return view('AdminPanel.addblog');
    }

    public function addingblog(Request $request){
        $request->validate([
            'Blog_Title'=>'required',
            'Blog_Created_by'=>'required',
            'Blog_Type'=>'required',
            'Blog_Images_Author_Photo'=>'mimes:jpg,png,jpeg|max:5048',
            'Blog_Details'=>'max:100'
        ]);
        
        $image = $request->file('Blog_Images_Author_Photo')->store('public/CaseStudyImg');
    
        $blogs = new Blog();
        // dd(request()->all());
        $blogs->Blog_Title = $request->Blog_Title;
        $blogs->Blog_Created_by = $request->Blog_Created_by;
        $blogs->Blog_Type = $request->Blog_Type;
        $blogs->Blog_Images_Author_Photo = $image;
        $blogs->Blog_Details = $request->Blog_Details;
        $blogs->Blog_Facebook = $request->Blog_Facebook;
        $blogs->Blog_Twitter = $request->Blog_Twitter;
        $blogs->Blog_Instagram = $request->Blog_Instagram;
        $blogs->Blog_Linkedin = $request->Blog_Linkedin;
    
        $res = $blogs->save();
        
        if($res){
            return back()->with('success','Category added successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
        // return view('AdminPanel.addblog');
    }

    public function updateblog(){
        return view('AdminPanel.updateblog');
    }

    public function updatingblog(){
        return view('AdminPanel.updateblog');
    }

    public function blogdetails(){
        return view('AdminPanel.blogdetails');
    }
}
