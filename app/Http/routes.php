<?php

use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function(){
	Route::get('test', function(){
        return 'awesome';
    });

    Route::post('signup', function () {
       //$credentials = request()->only('name','email','password');
       try {
           //$user = User::create($credentials);
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
    });

    Route::post('signin', function () {
       //$credentials = Input::only('email', 'password');
       $credentials = request()->only('email','password');

       if ( ! $token = JWTAuth::attempt($credentials)) {
           //return Response::json(false, HttpResponse::HTTP_UNAUTHORIZED);
           return response()->json(['error'=>'sumthing went wrong'], 201);
       }

       return response()->json(compact('token'));
    });

   Route::get('restricted', ['middleware'=>'jwt.auth', function(){
       //$token = JWTAuth::parseToken();
       //$user = $token->authenticate();
       $user = JWTAuth::parseToken()->authenticate();
       return response()->json([
           'data' => [
               'email'=> $user->email,
               'password'=>$user->password,
               'registered_at' => $user->created_at->toDateTimeString()
           ]
       ]);
   }]);

   Route::get('refresh', ['middleware'=>'jwt.refresh', function(){
       //TODO:: problem in refresh implementation
       $currentToken = JWTAuth::getToken();
       if(! $currentToken)
       {
           return response()->json(null);
       }
       $token = JWTAuth::refresh($currentToken);
       return response()->json(compact('token'));
   }]);
});
