<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class JWTAuthController extends Controller
{
    /**
     * [signUp description]
     * @return [type] [description]
     */
    public function signUp()
    {
        try {
            $user = User::create([
                'name'=> request()->get('name'),
                'email'=> request()->get('email'),
                'password'=>bcrypt(request()->get('password'))
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => 'User already exists.'], 400);
        }
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('token'));
    }

    /**
     * [signIn description]
     * @return [type] [description]
     */
    public function signIn()
    {
        $credentials= request()->only('email', 'password');
        if(! $token= JWTAuth::attempt($credentials))
        {
            return response()->json(['error'=>'Incorrect Credentials !!'],500);
        }
        return response()->json(compact('token'));
    }

    /**
     * [restricted description]
     * @return [type] [description]
     */
    public function restricted()
    {
        $user = JWTAuth::parseToken()->authenticate();
        return response()->json([
            'data' => [
                'email'=> $user->email,
                'password'=>$user->password,
                'registered_at' => $user->created_at->toDateTimeString()
            ]
        ]);
    }

    /**
     * [refreshToken description]
     * @return [type] [description]
     */
    //TODO::problem with refresh, not working properly
    /*public function refreshToken()
    {
        $currentToken = JWTAuth::getToken();
        if(! $currentToken)
        {
            return response()->json(null);
        }
        $token = JWTAuth::refresh($currentToken);
        return response()->json(compact('token'));
    }*/
}
