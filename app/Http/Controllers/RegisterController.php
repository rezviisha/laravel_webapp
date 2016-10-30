<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class RegisterController extends Controller
{


	public function signup(Request $request){

		//add validation rule here



		$newuser= new User;
		$newuser->name=$request->name;
		$newuser->school_id=$request->school_id;
		$newuser->email=$request->email;
		$newuser->password=bcrypt($request->password);
		$newuser->save();


	}
    
}
