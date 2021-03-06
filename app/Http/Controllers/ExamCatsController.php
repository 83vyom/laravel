<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ExamCat;
use DB;

class ExamCatsController extends Controller
{
    /**
     * Shows all exam categories
     * @return [type] [description]
     */
    public function index()
    {
        $examCats = ExamCat::all();
        //return $examCats;
        return response()->json([
            'data'=>$examCats
        ]);
    }

    /**
     * shows specific exam categories
     * @return [type] [description]
     */
    public function show($id)
    {
        $examCat = ExamCat::find($id);
        return response()->json([
            'data'=>$examCat
        ]);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {}

    /**
     * [update description]
     * @return [type] [description]
     */
    public function update()
    {}

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit()
    {}

    /**
     * [store description]
     * @return [type] [description]
     */
    public function store()
    {}

    /**
     * [destroy description]
     * @return [type] [description]
     */
    public function destroy()
    {}
}
