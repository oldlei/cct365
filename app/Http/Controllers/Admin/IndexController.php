<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __construct()
 {
		 $this->middleware('auth.admin:admin');
 }
 public function index()
    {
        dd(auth('admin')->user()->hasRole('user'));

				//return view('admin.index');
    }
}
