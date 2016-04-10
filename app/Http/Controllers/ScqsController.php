<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Scq;

class ScqsController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $scqs=Scq::all();
        return response()->json([
            'data'=>$scqs
        ]);
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show($id)
    {
        $scq=Scq::find($id);
        return response()->json([
            'data'=>$scq
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
