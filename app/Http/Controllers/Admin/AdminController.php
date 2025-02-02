<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(Request $request){
        // if($request->isMethod('post')){
        //     $data = $request->all();
        //     // echo "<pre>"; print_r($data); die;
        //     if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
        //         return redirect('admin/dashboard');
        //     }else{
        //         return redirect()->back()->with('error_message', 'Invalid Email or Passord!');
        //     }
        // }
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended('admin/dashboard');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

    }

}
