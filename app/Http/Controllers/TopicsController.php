<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Topic;
use App\Course;

class TopicsController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index(Request $id)
    {
        /*
        $topics=Topic::all();

        */
        $id = request()->only('id');
        //TODO::make sure 'course_id' or 'courseId'
        $topics = Topic::where('course_id', $id)
        //TODO::confirm 'asc' for ascending
                ->orderBy('order', 'asc');
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
