<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //use eloquent ORM to get all users
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create(){
        //create a new user
        $user = new User();
        $user->name = 'Santiago';
        $user->email = 'admin@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 26;
        $user->address = 'Calle 123';
        $user->zip_code = '005050';
        $user->save();

        User::create([
            'name' => 'Juan',
            'email' => 'info@demo.com',
            'password' => Hash::make('123456'),
            'age' => 30,
            'address' => 'Calle 456',
            'zip_code' => '005050'
        ]);

        User::create([
            'name' => 'Alejandro',
            'email' => 'support@demo.com',
            'password' => Hash::make('123456'),
            'age' => 44,
            'address' => 'Calle 789',
            'zip_code' => '005050'
        ]);

        return redirect()->route('user.index');
    }
}
