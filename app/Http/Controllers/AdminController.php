<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.home.homeContent');
    }

    public function manageUser() {
	//  $users=User::all();
	//  $users=User::simplePaginate(10);
        $users=User::paginate(10);
        return view('admin.user.manageUser', ['users'=>$users]);
    }

    public function __construct() {
        $this->middleware('auth');
    }
}
