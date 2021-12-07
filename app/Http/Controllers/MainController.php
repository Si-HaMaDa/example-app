<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function main()
    {
        $users = '<b>Users are off now!</b>';
        $users = ['one', 'two', 'three'];
        if (View::exists('admin.posts')) {
            return view('admin.posts', ['users' => $users, 'new' => 'this is my new var', 'arr' => []]);
        } else {
            return 'Errror';
        }
        // return view('home')->with('users', $users);
    }

    public function info(){
        return view('info');
    }

    public function infoPost(){
        dd(request());
        // return 'Saved ' . request();
        return 'Saved ' . $_POST['user'];
        return view('info');
    }
}
