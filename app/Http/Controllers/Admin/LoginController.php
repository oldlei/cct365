<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/Admin/index';

	public function __construct(){
		$this->middleware('guest:admin',['except' => 'logout']);
	}
	public function showLoginForm(){
		return view('admin.login');
	}
	protected function guard(){
		return auth()->guard('admin');
	}

}
