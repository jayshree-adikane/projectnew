<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
 
   
    public function welcome()
    {
        $users = User::get();
        return view('welcome')->with( ['users' => $users]);
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('welcome')->with(['selectedUser' => $user]);
    }
    public function index()
    {
        $users = User::get();
        return response()->json($users);
        
    }
}
