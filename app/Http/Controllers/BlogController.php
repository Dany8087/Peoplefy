<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogPostRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogdata = Blog::all();
        return view('AdminPanel.bloglist',['blog'=>$blogdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.addblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostRequest $request)
    {
        $image = $request->file('Images_Author_Photo')->store('public/BlogImg');
        $blogs = Blog::create($request->all());
        $blogs->Images_Author_Photo = $image;
    
        $res = $blogs->save();
        
        if($res){
            return back()->with('success','Blog added successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
        // return view('AdminPanel.addblog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogdata = Blog::find($id);
        return view('AdminPanel.blogdetails',['blog'=>$blogdata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogdata = Blog::find($id);
        return view('AdminPanel.updateblog',['blog'=>$blogdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogdata = Blog::find($id);
        return view('AdminPanel.updateblog',['blog'=>$blogdata]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogdata = Blog::find($id);
        $blogdata->delete();
        return redirect('bloglist');
    }
}
