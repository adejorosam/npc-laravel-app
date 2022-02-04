<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    public function index(){
        $users = DB::table('users')->get();
        $array = [
            'users' => $users
        ];
        return view('users.index', $array);
    }
}
