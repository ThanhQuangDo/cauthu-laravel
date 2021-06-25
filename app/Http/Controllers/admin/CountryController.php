<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\country\CreateCountryRequest;
use App\Http\Requests\country\UpdateCountryRequest;


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){
            $country = Country::paginate(3);
            return view('admin.country.index')->with('country', $country);
        }else{
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCountryRequest $request)
    {
        //
        Country::create($request->only('name'));
        
        return back()->with('status', 'create success');

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
        $country = Country::find($id);
        return view('admin.country.edit')->with('country', $country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, $id)
    {
        //
        $country = Country::find($id);

        $country->update($request->only('name'));      
        
        return back()->with('status', 'Update success');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        Country::destroy($country->id);
        return back()->with('status', 'Delete success');
    }
}
