<?php

namespace App\Http\Controllers;

use  Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\FinancialQuizModel;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        // $result = json_encode($data['result']);

        // FinancialQuizModel::insert(
        //     [
        //         'question1' => $data['question1'],
        //         'question2' => $data['question2'],
        //         'money' => $data['money'],
        //         'email' => $data['email'],
        //         'result' => $result,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // );

        return response($data);
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

        return response($data['result']);
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
