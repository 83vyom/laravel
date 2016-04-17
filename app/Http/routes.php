<?php

use App\User;
//use JWTAuth;
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

Route::get('adarsh', function(){return 'just simple';});

Route::group(['prefix' => 'api/v1'], function(){

   Route::post('signup', 'JWTAuthController@signUp');
   Route::post('signin', 'JWTAuthController@signIn');

   Route::group(['middleware'=>'jwt.auth'], function(){
       Route::get('restricted', 'JWTAuthController@restricted');
   });

   //TODO::using the below destroys everything, correct it
   /*Ropute::group(['middleware'=>'jwt.refresh'], function(){
       Route::get('refresh', 'JWTAuthController@refresh');
   });*/

   //intermediate specific routes
   Route::get('exam_cats/{cat}/exams', 'ExamsController@index');
   Route::get('exams/{id}/subjects', 'ExamSubjectsController@index');//TODO::

   //initial general routes
   Route::resource('examCats', 'ExamCatsController');
   Route::resource('exams', 'ExamsController');
   Route::resource('subjects', 'SubjectsController');
   Route::resource('courses', 'CoursesController');
   Route::resource('topics', 'TopicsController');
   Route::resource('scqs', 'ScqsController');
   Route::get('course/{id}/topics', 'TopicsController@index');
});
