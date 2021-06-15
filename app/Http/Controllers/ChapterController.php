<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Truyen;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chapter = Chapter::with('truyen')->orderBy('chapter_id', 'DESC')->get();
        return view('admincp.chapter.index')->with('chapter', $chapter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $truyen = Truyen::orderBy('truyen_id', 'DESC')->get();
        return view('admincp.chapter.create')->with('truyen', $truyen);
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
                'tieude' => 'required|unique:chapters|max:255',
                'slug_chapter' => 'required|unique:chapters|max:255',
                'tomtatchapter' => 'required|max:255',
                'noidung' => 'required|max:255',
                'truyen_id' => 'required',
                'kichhoat' => 'required',
            ],
            [
                'tieude.unique' => 'Tên chapter đã tồn tại',
                'tieude.required' => 'Tên chapter không được để trống',
                'slug_chapter.unique' => 'Slug chapter đã tồn tại',
                'slug_chapter.required' => 'Slug chapter không được để trống',
                'tomtatchapter.required' => 'Mô tả chapter không được để trống',
                'noidung.required' => 'Nội dung chapter không được để trống',
                'truyen_id.required' => 'Truyện của chapter không được để trống',
                'kichhoat' => 'Vui lòng kích hoạt hoặc ẩn'
            ]
        );
        $chapter = new Chapter();
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtatchapter = $data['tomtatchapter'];
        $chapter->noidung = $data['noidung'];
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->kichhoat = $data['kichhoat'];

        $chapter->save();
        return Redirect()->back()->with('status', 'Thêm Chapter thành công');

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
        $chapter = Chapter::find($id);
        $truyen = Truyen::orderBy('truyen_id', 'DESC')->get();
        return view('admincp.chapter.edit')->with('chapter', $chapter)->with('truyen', $truyen);
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
                'tieude' => 'required|max:255',
                'slug_chapter' => 'required|max:255',
                'tomtatchapter' => 'required|max:255',
                'noidung' => 'required|max:255',
                'truyen_id' => 'required',
                'kichhoat' => 'required',
            ],
            [
                'tieude.required' => 'Tên chapter không được để trống',
                'slug_chapter.required' => 'Slug chapter không được để trống',
                'tomtatchapter.required' => 'Mô tả chapter không được để trống',
                'noidung.required' => 'Nội dung chapter không được để trống',
                'truyen_id.required' => 'Truyện của chapter không được để trống',
                'kichhoat' => 'Vui lòng kích hoạt hoặc ẩn'
            ]
        );
        $chapter = Chapter::find($id);
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->tomtatchapter = $data['tomtatchapter'];
        $chapter->noidung = $data['noidung'];
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->kichhoat = $data['kichhoat'];

        $chapter->save();
        return Redirect()->back()->with('status', 'Cập nhật Chapter thành công');
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
        Chapter::find($id)->delete();
        return Redirect()->back()->with('status', 'Xóa Chapter thành công');
    }
}
