<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Case_Study;

class AuthController extends Controller
{
    public function Peoplefy(){
        $casestudydata = Case_Study::all();
        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|min:6|max:12'
        //     ]);
        //     $user = User::where('email', '=',$request->email)->first();
        //     if($user){
        //         if(Hash::check($request->password, $user->password)) {
        //             $request->session()->put('loginId', $user->id);
        //             return view('AdminPanel.casestudylist');
        //         }else{
        //             return back()->with('fail', 'Password does not match.');
        //         }
                
        //     } else{
        //         return back()->with('fail', 'This email is not registered.');
        //     }
            return view('AdminPanel.casestudylist',['contractors'=>$casestudydata]);
    }
}
