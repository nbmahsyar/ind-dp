<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Controller;
// use App\Http\Requests;

use Alert;

class User extends Controller
{
    public function login(){
        return view('user.login');
        // echo "here";
    }

	public function signin(Request $request) {
		$this->validate($request, [
            'user_name'=>'required',
            'password'=>'required'
        ]);

        if(\Auth::attempt(['username' => $request['user_name'], 'password' => $request['password']])){
            $login_detail = array(
                'username' => \Auth::user()->username,
                'role' => \Auth::user()->role,
            );
            $request->session()->put('login_detail',$login_detail);

            alert()->success('You have been logged out.', 'Good bye!');
            return redirect()->route('dashboard.home');
        } else {
            return redirect()->back()->withErrors(['errors'=>'Username atau Password tidak sesuai']);
        }
	}

	public function signout(){
        \Auth::logout();
        return redirect()->route('user.login');  
    }
}
