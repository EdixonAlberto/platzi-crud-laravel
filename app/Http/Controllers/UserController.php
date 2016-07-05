<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    private $path ='user';

    public function index(){

        return User::all();
    }

    public function create(){
        
        return view($this->path.'.create');
    }
}
