@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê Chapter') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Slug Chapter</th>
                                <th scope="col">Tóm tắt Chapter</th>
                                
                                <th scope="col">Truyện</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Chỉnh sửa</th>
                                <th scope="col">Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($chapter as $key => $ct)
                            <tr>
                                <th scope="row">{{$ct->chapter_id}}
                                    <td>{{$ct->tieude}}</td>
                                    <td>{{$ct->slug_chapter}}</td>
                                    <td>{{$ct->tomtatchapter}}</td>
                                    
                                    <td>{{$ct->truyen->tentruyen}}</td>
                                    <td>
                                    @if($ct->kichhoat==0)
                                    <span class="text text-success">Đang kích hoạt</span>
                                    @else
                                    <span class="text text-success">Đang ẩn</span>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{route('chapter.edit', [$ct->chapter_id])}}" class="btn btn-primary">Chỉnh sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{route('chapter.destroy', [$ct->chapter_id])}}">
                                        @method('DELETE')
                                        @csrf
                                            <button onclick="return confirm('Bạn chắc chắn muốn xóa?');" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
