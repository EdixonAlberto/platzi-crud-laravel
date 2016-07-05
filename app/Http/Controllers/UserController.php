<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use Exception;

class UserController extends Controller
{
    private $path ='user';

    public function index(){

        return User::all();
    }

    public function create(){
        
        return view($this->path.'.create');
    }

    public function store(Request $request){
        /*
         * Register user.
         * */
        try{
            $user = new User();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route('users.index');
        }
        catch(Exception $e){

            return "Fatal error - ".$e->getMessage();
        }
    }
}
