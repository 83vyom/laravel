<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Subject;

class SubjectsController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $subjects= Subject::all();
        return response()->json([
            'data'=>$subjects
        ]);
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return response()->json([
            'data'=>$subject
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
    public function destroy(){}
}
