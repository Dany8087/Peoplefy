<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BlogPostRequest;
use App\Models\Case_Study;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $casestudydata = Case_Study::all();
            return view('AdminPanel.casestudylist',['casestudy'=>$casestudydata]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('AdminPanel.addcasestudy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostRequest $request)
    {
            $image = $request->file('Images_Author_Photo')->store('public/CaseStudyImg');
            $case__studies = Case_Study::create($request->all());
            $case__studies->Images_Author_Photo = $image;
                
            $res = $case__studies->save();
            
            if($res){
                return back()->with('success','Case Study added successfully');
            }else{
                return back()->with('fail', 'Something wrong');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $casestudydata = Case_Study::find($id);
        return view('AdminPanel.casestudydetails',['casestudy'=>$casestudydata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $casestudydata = Case_Study::find($id);
        return view('AdminPanel.updatecasestudy',['casestudy'=>$casestudydata]);
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
        return view('AdminPanel.updatecasestudy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $casestudydata = Case_Study::find($id);
        $casestudydata->delete();
        return redirect('casestudylist');
    }
}
