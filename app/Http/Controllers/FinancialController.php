<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

use App\Models\FinancialQuizModel;
use App\Models\quiz1Model;
use App\Models\quiz2Model;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = quiz1Model::get();
        $data1 = quiz2Model::get();

        return response()->json(['quiz1' => collect($data), 'quiz2' => collect($data1)]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $result = json_encode($data['result']);
        $mailData = [
            'mail' => $data['result']['emailVal'],
            'qone' => $data['result']['quit1Val'],
            'qtwo' => $data['result']['quit2Val'],
            'money' => $data['result']['moneyVal']
        ];
        FinancialQuizModel::insert(
            [
                'question1' => $data['result']['quit1Val'],
                'question2' => $data['result']['quit2Val'],
                'money' => $data['result']['moneyVal'],
                'email' => $data['result']['emailVal'],
                'result' => $result,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        // Mail::to($data['result']['emailVal'])->send(new DemoMail($mailData));

        return response()->json('ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}