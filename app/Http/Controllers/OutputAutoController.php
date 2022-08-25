<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Autopark;
use Illuminate\Http\Request;

class OutputAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Autopark::all();
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
        $validated = $request->validate([
            'Moodel' => ['required'],
            'num' => ['required'],
            'status' => ['required'],
            'mileage' => ['required'], 
            'latest_maintenance' => ['required']
        ]); 

        $auto = Autopark::create([
            "Moodel" => $request ->Moodel,
            "num"=> $request ->num,
            "status" => $request ->status,
            "mileage" => $request ->mileage,
            "latest_maintenance" => $request->latest_maintenance
        ]);

        return [
            "status" => true,
            "auto" => $auto
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auto = Autopark::find($id);
        if (!$auto) {
            return response() ->json([
                "status" =>false,
                "message" =>"NOT FOUND"
            ]) -> setStatusCode(404);
        }
        return $auto;
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
        $auto = Autopark::find($id);
        $auto->Moodel=$request->Moodel;
        $auto->num=$request->num;
        $auto->status=$request->status;
        $auto->mileage=$request->mileage;
        $auto->latest_maintenance=$request->latest_maintenance;
        $auto -> update();
        return response()->json($auto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Autopark::find($id);
        $auto->delete();
        return ["status" => true];
    }
}
