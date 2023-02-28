<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    Public function index(){
  
        $users = User::orderBy('id','desc')->paginate(10);
        return view('user',compact('users'));

    }
}
