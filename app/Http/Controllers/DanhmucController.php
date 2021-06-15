<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhmuctruyen;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhmuctruyen = Danhmuctruyen::orderBy('danhmuc_id', 'DESC')->get();
        return view('admincp.danhmuctruyen.index')->with('danhmuctruyen', $danhmuctruyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admincp.danhmuctruyen.create');
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
                'tendanhmuc' => 'required|unique:danhmuctruyens|max:255',
                'slug_danhmuc' => 'required|unique:danhmuctruyens|max:255',
                'motadanhmuc' => 'required|max:255',
                'kichhoat' => 'required',
            ],
            [
                'tendanhmuc.unique' => 'Tên danh mục đã tồn tại',
                'tendanhmuc.required' => 'Tên danh mục không được để trống',
                'slug_danhmuc.unique' => 'Slug danh mục đã tồn tại',
                'slug_danhmuc.required' => 'Slug danh mục không được để trống',
                'motadanhmuc.required' => 'Mô tả danh mục không được để trống',
                'kichhoat' => 'Vui lòng kích hoạt hoặc ẩn'
            ]
        );
        $danhmuctruyen = new Danhmuctruyen();
        $danhmuctruyen->tendanhmuc = $data['tendanhmuc'];
        $danhmuctruyen->slug_danhmuc = $data['slug_danhmuc'];
        $danhmuctruyen->motadanhmuc = $data['motadanhmuc'];
        $danhmuctruyen->kichhoat = $data['kichhoat'];
        $danhmuctruyen->save();
        return Redirect()->back()->with('status', 'thêm danh mục thành công');
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
        $danhmuctruyen = Danhmuctruyen::find($id);
        return view('admincp.danhmuctruyen.edit')->with('danhmuctruyen', $danhmuctruyen);
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
                'tendanhmuc' => 'required|unique:danhmuctruyens|max:255',
                'slug_danhmuc' => 'required|unique:danhmuctruyens|max:255',
                'motadanhmuc' => 'required|max:255',
                'kichhoat' => 'required',
            ],
            [
                'tendanhmuc.unique' => 'Tên danh mục đã tồn tại',
                'tendanhmuc.required' => 'Tên danh mục không được để trống',
                'slug_danhmuc.unique' => 'Slug danh mục đã tồn tại',
                'slug_danhmuc.required' => 'Slug danh mục không được để trống',
                'motadanhmuc.required' => 'Mô tả danh mục không được để trống',
                'kichhoat' => 'Vui lòng kích hoạt hoặc ẩn'
            ]
        );
        $danhmuctruyen = Danhmuctruyen::find($id);
        $danhmuctruyen->tendanhmuc = $data['tendanhmuc'];
        $danhmuctruyen->slug_danhmuc = $data['slug_danhmuc'];
        $danhmuctruyen->motadanhmuc = $data['motadanhmuc'];
        $danhmuctruyen->kichhoat = $data['kichhoat'];
        $danhmuctruyen->save();
        return Redirect()->back()->with('status', 'Cập nhật danh mục thành công');
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
        Danhmuctruyen::find($id)->delete();
        return Redirect()->back()->with('status', 'Xóa danh mục thành công');
    }
}
