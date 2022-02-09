<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(Request $request){

        $result = User::create($request->all());
        return response()->json($result);
    }
}
