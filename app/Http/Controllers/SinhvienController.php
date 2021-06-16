<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\svRequest;
use DB;
use Validator;


class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sinhvien = DB::table('sinhviens')->orderBy('sinhvien_id', 'DESC')->get();
        return view('admincp.sinhvien.index')->with('sinhvien', $sinhvien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     
        return view('admincp.sinhvien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(svRequest $request)
    {
        //
        $data = array();
        $data['tensinhvien'] = $request->tensinhvien;
        $data['namsinh'] = $request->namsinh;
        $data['lop'] = $request->lop;
        $data['quequan'] = $request->quequan;

        DB::table('sinhviens')->insert($data);
        return Redirect()->back()->with('status', 'Thêm sinh viên thành công');
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
        $sinhvien = DB::table('sinhviens')->where('sinhvien_id', $id)->first();
       
        return view('admincp.sinhvien.edit')->with('sinhvien', $sinhvien);
        
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
        $data = array();
        $data['tensinhvien'] = $request->tensinhvien;
        $data['namsinh'] = $request->namsinh;
        $data['lop'] = $request->lop;
        $data['quequan'] = $request->quequan;

        DB::table('sinhviens')->where('sinhvien_id', $id)->update($data);
        return back()->with('status', 'Cập nhật sinh viên thành công');
    

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
        DB::table('sinhviens')->where('sinhvien_id', $id)->delete();
        return back()->with('status', 'xóa sinh viên thành công');
    }
}
