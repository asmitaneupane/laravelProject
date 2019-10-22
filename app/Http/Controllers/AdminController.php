<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Hash;
use email;

class AdminController extends Controller
{
    public function login(Request $request)
    {
    	if ($request->isMethod('post'))
    	{
    		$data=$request->input();
    		if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1']))
    		 {
    			return view('index1');
    		}
    		else
    		{
    			echo "Invalid Username or Password";
    		}
    	}
    	return view('login');
    	    }


    public function logout () {
     //logout user
    	Session::flush();
    auth()->logout();
//redirect to homepage
   		return redirect('/admin');
 }

 public function setting () {
 	
 	return redirect('/setting');
 }

 public function addcategory() {
 	return redirect('/addcategory');
 }

 public function listcategory() {
 	return redirect('/listcategory');
 }

 public function updatePassword(Request $request)
 {
 	if ($request->isMethod('post')) {

 		$data = $request->all();
 		// echo "string";
 		$check_password=User::where(['email'=>Auth::user()->email])->first();
 		$previouspassword=$data['previouspassword'];
 		if(Hash::check($previouspassword,$check_password->password))
 		{
 			$password=bcrypt($data['new_pwd']);
 			User::where('id',1)->update(['password'=>$password]);
 			echo 'password changed successfully!!';
 			return back()->with('success','Password changed successfully!!!');
 		}
 		else
 		{
 			return back()->with('failure','Incorrect Current Password!!!');
 		}
 	}
 }

}

