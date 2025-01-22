<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //use eloquent ORM to get all users
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }
}
