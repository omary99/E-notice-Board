<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function store(Request $request){
    
        $data = new user;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;

        $data->save();
        return redirect()->back();
    }
}
