<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Case_Study;

class CaseStudyController extends Controller
{
    public function casestudylist(){
        return view('AdminPanel.casestudylist');
    }

    public function addcasestudy(){
        return view('AdminPanel.addcasestudy');
    }

    public function addingcasestudy(Request $request){
        $request->validate([
            'Casestudy_Title'=>'required',
            'Casestudy_Created_by'=>'required',
            'Casestudy_Type'=>'required',
            'Casestudy_Images_Author_Photo'=>'mimes:jpg,png,jpeg|max:5048',
            'Casestudy_Details'=>'max:100'
        ]);
        
        $image = $request->file('Casestudy_Images_Author_Photo')->store('public/CaseStudyImg');
    
        $case__studies = new Case_Study();
        // dd(request()->all());
        $case__studies->Casestudy_Title = $request->Casestudy_Title;
        $case__studies->Casestudy_Created_by = $request->Casestudy_Created_by;
        $case__studies->Casestudy_Type = $request->Casestudy_Type;
        $case__studies->Casestudy_Images_Author_Photo = $image;
        $case__studies->Casestudy_Details = $request->Casestudy_Details;
        $case__studies->Casestudy_Facebook = $request->Casestudy_Facebook;
        $case__studies->Casestudy_Twitter = $request->Casestudy_Twitter;
        $case__studies->Casestudy_Instagram = $request->Casestudy_Instagram;
        $case__studies->Casestudy_Linkedin = $request->Casestudy_Linkedin;
    
        $res = $case__studies->save();
        
        if($res){
            return back()->with('success','Category added successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    
        // return view('AdminPanel.addcasestudy');
    }

    public function casestudydetails(){
        return view('AdminPanel.casestudydetails');
    }

    public function updatecasestudy(){
        return view('AdminPanel.updatecasestudy');
    }

    public function updatingcasestudy(){
        return view('AdminPanel.updatecasestudy');
    }
}
