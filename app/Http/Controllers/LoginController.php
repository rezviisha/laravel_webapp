<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    





	public function processLogin(Request $request)
	{

		//$name=$request->name;

		//return $name;


		//place validation code here


		//


		$credentials=['email'=>$request->email,'password'=>$request->password];


		if(Auth::attempt($credentials)){


			//move to dashboard
			echo "Logged in";



		}else{

			echo "wrong";
		}










	}





}
