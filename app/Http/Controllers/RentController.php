<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRentRequest;
use App\Models\Rent;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::all();
        return view('rent.index',compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tenants = Tenant::all();
        return view('rent.create',compact('tenants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRentRequest $request)
    {
        $rent = Rent::create($request->validated());
        return redirect()->route('rent.index')->with('info','Rent payment for '.$rent->tenant->first_name.' '.$rent->tenant->last_name.' made.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        $tenants = Tenant::all();
        return view('rent.edit',compact('rent','tenants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $UpdateRentRequest, Rent $rent)
    {
        $rent->update($UpdateRentRequest->toArray());
        return redirect()->route('rent.index')->with('success','Rent payment for '.$rent->tenant->first_name.' '.$rent->tenant->last_name. ' Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();
        return redirect()->route('rent.index')->with('info','Rent payment for '.$rent->tenant->first_name.' '.$rent->tenant->last_name.' deleted!');
    }
}
