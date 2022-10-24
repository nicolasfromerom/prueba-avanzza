<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (LoginRequest $request)
    {
        $auth= Auth::attempt($request->all());
        if ($auth) {
            $token = (object)$request->user()->createToken('bdp_token');
            $token=$token->plainTextToken;
            $message="Successfully.";
            return response()->json(compact('token','message'),202);
        }
        return response()->json(['error'=>'credentials error'],401);
    }
}
