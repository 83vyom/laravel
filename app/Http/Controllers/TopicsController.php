<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Topic;
use App\Course;
//use DB;

class TopicsController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index($id)
    {
        //$id = $request->input('id');
        //$id = (int)$id;
        
        $topics = Topic::where('course_id',$id)->orderBy('order','asc')->get();
        //$topics= DB::table('topics')->where('course_id', '1')->get();
        return response()->json([
            'data'=>$topics
        ]);
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show($id)
    {
        $topic=Topic::find($id);
        return response()->json([
            'data'=>$topic
        ]);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create(){}
    public function update(){}
    public function edit(){}
    public function store(){}
}
