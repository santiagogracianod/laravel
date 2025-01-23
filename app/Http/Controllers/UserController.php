<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //use eloquent ORM to get all users

        //collection of users
        /* $users = User::where('age', '>=', 30)
        ->orderBy('age','asc')
        ->get(); */

        //use DB facade

        $users = DB::select('select * from users where age >= ?', [30]);

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create(){

        //use DB facade
        DB::insert('insert into users (name, email, password, age, address, zip_code) values (?, ?, ?, ?, ?, ?)', [
            'Carlos', 'carlos@demo.com', Hash::make('123456'), 25, 'Calle BOlivar', '444444'
        ]);

        //create a new user
        /* $user = new User();
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
        ]); */

        return redirect()->route('user.index');
    }
}
