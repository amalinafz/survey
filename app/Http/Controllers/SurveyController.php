<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
Use Alert;
use DB;

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
        $dataA1 =Survey::where('age', '< 18')->count();
        $dataA2 =Survey::where('age', '18 to 35')->count();
        $dataA3 =Survey::where('age', '35 to 60')->count();
        $dataA4 =Survey::where('age', 'Above 60')->count();
        $dataE1 =Survey::where('education', 'Secondary school and below')->count();
        $dataE2 =Survey::where('education', 'Diploma')->count();
        $dataE3 =Survey::where('education', 'Degree')->count();
        $dataE4 =Survey::where('education', 'Post graduated degree')->count();
        $dataI1 =Survey::where('income', 'Less than RM1000')->count();
        $dataI2 =Survey::where('income', 'Between RM1000 to RM3000')->count();
        $dataI3 =Survey::where('income', 'Between RM3000 to RM5000')->count();
        $dataI4 =Survey::where('income', 'More than RM5000')->count();
        $dataF =Survey::where('gender', 'Female')->count();
        $dataM =DB::table('surveys')->where('gender','Male')->count();


        return view ('homepage', compact('outcomes', 'dataF', 'dataM', 'dataA1', 'dataA2', 'dataA3', 'dataA4', 'dataE1', 'dataE2', 'dataE3', 'dataE4', 'dataI1', 'dataI2', 'dataI3', 'dataI4' ));
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
        // dd($param);
        $request->validate([
            'age'=>'bail|required|not_in:0',
            'education'=>'bail|required|not_in:0',
            'income'=>'bail|required|not_in:0',
            'gender'=>'required|not_in:0'
        ]);
        // dd($param);
        $surv = new Survey;
        $surv->age= $param['age'];
        $surv->education = $param['education'];
        $surv->income = $param['income'];
        $surv->gender = $param['gender'];
        $surv->save();
        // dd("haha");
        Alert::success('Thank you', 'Scroll down to see the result');
        // $outcomes = Survey::all();
        return redirect('/');
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
        // return view ('result', ['survey'=>$survey]);
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
        $dataA1 =Survey::where('age', '< 18')->count();
        $dataA2 =Survey::where('age', '18 to 35')->count();
        $dataA3 =Survey::where('age', '35 to 60')->count();
        $dataA4 =Survey::where('age', 'Above 60')->count();
        $dataE1 =Survey::where('education', 'Secondary school and below')->count();
        $dataE2 =Survey::where('education', 'Diploma')->count();
        $dataE3 =Survey::where('education', 'Degree')->count();
        $dataE4 =Survey::where('education', 'Post graduated degree')->count();
        $dataI1 =Survey::where('income', 'Less than RM1000')->count();
        $dataI2 =Survey::where('income', 'Between RM1000 to RM3000')->count();
        $dataI3 =Survey::where('income', 'Between RM3000 to RM5000')->count();
        $dataI4 =Survey::where('income', 'More than RM5000')->count();
        $dataF =Survey::where('gender', 'Female')->count();
        $dataM =DB::table('surveys')->where('gender','Male')->count();
        return view ('result', compact('outcomes', 'dataF', 'dataM', 'dataA1', 'dataA2', 'dataA3', 'dataA4', 'dataE1', 'dataE2', 'dataE3', 'dataE4', 'dataI1', 'dataI2', 'dataI3', 'dataI4' ));
    }
}
