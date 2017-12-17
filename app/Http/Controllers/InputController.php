<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        return Input::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Input();
        $input->type = $request->type;
        $input->save();
        return $input;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Input $input)
    {
        $input->type=$request->type;
        $input->save();
        return $input;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy(Input $input)
    {
        $input->delete();
    }

    public function dropDown(){
        return Input::all()->map(function($input){
            return ['id'=>$input->id,'type'=>$input->type];
        });
    }
}
