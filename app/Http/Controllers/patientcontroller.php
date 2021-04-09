<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patientmodel;

class patientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients=patientmodel::all();
        return view('viewallpatient',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $getPname=request('name');
        $patients=patientmodel::query()->where('name','LIKE',"%{$getPname}%")->get();
        return view('viewallpatient',compact('patients'));

    }
    public function store(Request $request)
    {
        $getcode=request('code');
        $getname=request('name');
        $getaddress=request('address');
        $getphone=request('phone');
        $getsymptoms=request('symptoms');
        $getdiagnosis=request('diagnosis');

        echo $getcode;
        echo "<br>";
        echo $getname;
        echo "<br>";
        echo $getaddress;
        echo "<br>";
        echo $getphone;
        echo "<br>";
        echo $getsymptoms;
        echo "<br>";
        echo $getdiagnosis;

        $patient=new patientmodel();

        $patient->code=$getcode;
        $patient->name=$getname;
        $patient->address=$getaddress;
        $patient->phone=$getphone;
        $patient->symptoms=$getsymptoms;
        $patient->diagnosis=$getdiagnosis;
        $patient->save();


        
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

        $patients=patientmodel::find($id);
        return view('editview',compact('patients'));

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
        $patient=patientmodel::find($id);
        $getcode=request('code');
        $getname=request('name');
        $getaddress=request('address');
        $getphone=request('phone');
        $getsymptoms=request('symptoms');
        $getdiagnosis=request('diagnosis');

        echo $getcode;
        echo "<br>";
        echo $getname;
        echo "<br>";
        echo $getaddress;
        echo "<br>";
        echo $getphone;
        echo "<br>";
        echo $getsymptoms;
        echo "<br>";
        echo $getdiagnosis;

    

        $patient->code=$getcode;
        $patient->name=$getname;
        $patient->address=$getaddress;
        $patient->phone=$getphone;
        $patient->symptoms=$getsymptoms;
        $patient->diagnosis=$getdiagnosis;
        $patient->save();


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
