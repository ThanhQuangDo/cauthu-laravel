<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cauthu;

class CauthuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cauthu = Cauthu::orderBy('cauthu_id','DESC')->get();
        return view('admincp.cauthu.index')->with('cauthu', $cauthu);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admincp.cauthu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate(
            [
                'tencauthu' => 'required|unique:cauthus|max:255',
                'tuoi' => 'required',
                'quoctich' => 'required',
                'vitri' => 'required',
                'luong' => 'required',
            ]
            );
        
        $cauthu = new Cauthu();
        $cauthu->tencauthu = $data['tencauthu'];
        $cauthu->tuoi = $data['tuoi'];
        $cauthu->quoctich = $data['quoctich'];
        $cauthu->vitri = $data['vitri'];
        $cauthu->luong = $data['luong'];

        $cauthu->save();
        return Redirect()->back()->with('status', 'Thêm cầu thủ thành thành công');
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
        $cauthu = Cauthu::find($id);
        return view('admincp.cauthu.edit')->with('cauthu', $cauthu);
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
        $data = $request->validate(
            [
                'tencauthu' => 'required|max:255',
                'tuoi' => 'required',
                'quoctich' => 'required',
                'vitri' => 'required',
                'luong' => 'required',
            ]
            );
        
        $cauthu = Cauthu::find($id);
        $cauthu->tencauthu = $data['tencauthu'];
        $cauthu->tuoi = $data['tuoi'];
        $cauthu->quoctich = $data['quoctich'];
        $cauthu->vitri = $data['vitri'];
        $cauthu->luong = $data['luong'];

        $cauthu->save();
        return Redirect()->back()->with('status', 'Cập nhật thông tin cầu thủ thành thành công');
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
        $cauthu = Cauthu::find($id)->delete();
        return Redirect()->back()->with('status', 'Xóa cầu thủ thành công');
        
    }
}
