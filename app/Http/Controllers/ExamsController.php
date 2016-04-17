<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Exam;

class ExamsController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index($id)
    {
        $exams= Exam::where('exam_cat_id',$id)->get();
        return response()->json([
            'data'=>$exams
        ]);
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show($id)
    {
        $exam=Exam::find($id);
        return response()->json([
            'data'=>$exam
        ]);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create(){}

    /**
     * [update description]
     * @return [type] [description]
     */
    public function update(){}

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit(){}

    /**
     * [store description]
     * @return [type] [description]
     */
    public function store(){}

    /**
     * [destroy description]
     * @return [type] [description]
     */
    public function destroy(){}
}
