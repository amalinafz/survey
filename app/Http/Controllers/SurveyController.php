<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
Use Alert;


class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Alert::alert('Welcome', 'Message', 'Type');
        // if(session(key: 'success_message')){
        //     Alert::success('Thank you', session(key: 'success_message'));
        // }
        $outcomes = Survey::all();

        return view ('homepage', compact('outcomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param =$request->all();

        $request->validate([
            'age'=>'required',
            'education'=>'required',
            'income'=>'required',
            'gender'=>'required'
        ]);

        $surv = new Survey;
        $surv->age= $param['age'];
        $surv->education = $param['education'];
        $surv->income = $param['income'];
        $surv->gender = $param['gender'];
        $surv->save();
        // dd("haha");
        Alert::success('Thank you', 'The data have been succesfully collected');
        // $outcomes = Survey::all();
        return view ('homepage');
        // return view ('result', compact('outcomes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        // $outcomes = Survey::all();
        // return view ('result', compact('outcomes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
    }

    public function tengok(Survey $survey)
    {
        $outcomes = Survey::all();
        return view ('result', compact('outcomes'));
    }
}
