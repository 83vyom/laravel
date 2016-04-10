<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Topic;

class TopicsController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $topics=Topic::all();
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
