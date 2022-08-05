<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Case_Study;

class CaseStudyController extends Controller
{
    public function casestudylist(){
        $casestudydata = Case_Study::all();
        return view('AdminPanel.casestudylist',['casestudy'=>$casestudydata]);
    }

    public function addcasestudy(){
        return view('AdminPanel.addcasestudy');
    }

    public function addingcasestudy(Request $request){
        $request->validate([
            'Title'=>'required',
            'Created_by'=>'required',
            'Images_Author_Photo'=>'mimes:jpg,png,jpeg|max:5048',
            'Details'=>'required'
        ]);
        
        $image = $request->file('Images_Author_Photo')->store('public/CaseStudyImg');
    
        $case__studies = new Case_Study();
        $case__studies->Title = $request->Title;
        $case__studies->Created_by = $request->Created_by;
        $case__studies->Images_Author_Photo = $image;
        $case__studies->Details = $request->Details;
        $case__studies->Facebook = $request->Facebook;
        $case__studies->Twitter = $request->Twitter;
        $case__studies->Instagram = $request->Instagram;
        $case__studies->Linkedin = $request->Linkedin;
        $res = $case__studies->save();
        
        if($res){
            return back()->with('success','Case Study added successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    
        // return view('AdminPanel.addcasestudy');
    }

    public function casestudydetails($id){
        $casestudydata = Case_Study::find($id);
        return view('AdminPanel.casestudydetails',['casestudy'=>$casestudydata]);
    }

    public function updatecasestudy($id){
        $casestudydata = Case_Study::find($id);
        return view('AdminPanel.updatecasestudy',['casestudy'=>$casestudydata]);
    }

    public function updatingcasestudy(){
        return view('AdminPanel.updatecasestudy');
    }

    public function deletecasestudy($id){
        $casestudydata = Case_Study::find($id);
        $casestudydata->delete();
        return redirect('casestudylist');
    }
}
