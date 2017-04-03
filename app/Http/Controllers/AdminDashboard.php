<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminDashboard extends Controller
{
    public function getIndex(){
		return view('superadmin.dashboard.manage');
	}
}
