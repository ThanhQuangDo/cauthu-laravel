<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhmuctruyen;
use App\Models\Truyen;

class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $truyen = Truyen::with('danhmuctruyen')->orderBy('truyen_id', 'DESC')->get();
        return view('admincp.truyen.index')->with('truyen', $truyen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $danhmuctruyen = Danhmuctruyen::orderBy('danhmuc_id', 'DESC')->get();
        return view('admincp.truyen.create')->with('danhmuctruyen', $danhmuctruyen);
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
                'tentruyen' => 'required|unique:truyens|max:255',
                'slug_truyen' => 'required|unique:truyens|max:255',
                'tomtattruyen' => 'required|max:255',
                'danhmuctruyen' => 'required',
                'image_truyen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width:1000,max_height=1000',
                'kichhoat' => 'required',
            ],
            [
                'tentruyen.unique' => 'Tên truyện đã tồn tại',
                'tentruyen.required' => 'Tên truyện không được để trống',
                'slug_truyen.unique' => 'Slug truyện đã tồn tại',
                'slug_truyen.required' => 'Slug truyện không được để trống',
                'tomtattruyen.required' => 'Mô tả truyện không được để trống',
                'danhmuctruyen.required' => 'Danh mục truyện không được để trống',
                'image_truyen.required' => 'Hình ảnh truyện không được để trống',
                'kichhoat' => 'Vui lòng kích hoạt hoặc ẩn'
            ]
        );
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtattruyen = $data['tomtattruyen'];
        $truyen->danhmuc_id = $data['danhmuctruyen'];
        $truyen->kichhoat = $data['kichhoat'];

        //add image
        $get_image = $request->image_truyen;
        $path = 'public/upload/truyen/';
        $getName_image = $get_image->GetClientOriginalName(); // lấy tên file : GetClientOriginalName();
        $name_image = current(explode('.', $getName_image));
        $new_image = $name_image.rand(0,1000).'.'.$get_image->getClientOriginalExtension(); // lấy đuôi file getClientOriginalExtension
        $get_image->move($path,$new_image);

        $truyen->image_truyen = $new_image;

        $truyen->save();
        return Redirect()->back()->with('status', 'Thêm truyện thành công');
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
        $truyen = Truyen::find($id);
        $danhmuctruyen = Danhmuctruyen::orderBy('danhmuc_id', 'DESC')->get();
        return view('admincp.truyen.edit')->with('truyen', $truyen)->with('danhmuctruyen', $danhmuctruyen);

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
                'tentruyen' => 'required|max:255',
                'slug_truyen' => 'required|max:255',
                'tomtattruyen' => 'required|max:255',
                'danhmuctruyen' => 'required',
                
                'kichhoat' => 'required',
            ],
            [
                
                'tentruyen.required' => 'Tên truyện không được để trống',
                
                'slug_truyen.required' => 'Slug truyện không được để trống',
                'tomtattruyen.required' => 'Mô tả truyện không được để trống',
                'danhmuctruyen.required' => 'Danh mục truyện không được để trống',
                
                'kichhoat' => 'Vui lòng kích hoạt hoặc ẩn'
            ]
        );
        $truyen = Truyen::find($id);
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtattruyen = $data['tomtattruyen'];
        $truyen->danhmuc_id = $data['danhmuctruyen'];
        $truyen->kichhoat = $data['kichhoat'];

        //add image
        $get_image = $request->image_truyen;
        if($get_image){
            $path = 'public/upload/truyen/'.$truyen->image_truyen;
            if(file_exists($path)){
                unlink($path);
            }
            $path = 'public/upload/truyen/';
            $getName_image = $get_image->GetClientOriginalName(); // lấy tên file : GetClientOriginalName();
            $name_image = current(explode('.', $getName_image));
            $new_image = $name_image.rand(0,1000).'.'.$get_image->getClientOriginalExtension(); // lấy đuôi file getClientOriginalExtension
            $get_image->move($path,$new_image);

            $truyen->image_truyen = $new_image;
        }
        $truyen->save();
        return Redirect()->back()->with('status', 'Thêm truyện thành công');
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
        $truyen = Truyen::find($id);
        $path = 'public/upload/truyen/'.$truyen->image_truyen;
        if(file_exists($path)){
            unlink($path);
        }
        Truyen::find($id)->delete();
        return Redirect()->back()->with('status', 'Xóa truyện thành công');
    }
}
