@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê truyện') }}</div>

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
                                <th scope="col">Tên truyện</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Slug truyện</th>
                                <th scope="col">Danh mục truyện</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Chỉnh sửa</th>
                                <th scope="col">Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($truyen as $key => $t)
                        
                            <tr>
                                <th scope="row">{{$t->truyen_id}}
                                    <td>{{$t->tentruyen}}</td>
                                    <td><img src="{{asset('public/upload/truyen/'.$t->image_truyen)}}" height="200" width="150"></td>
                                    <td>{{$t->slug_truyen}}</td>
                                    <td>{{$t->danhmuctruyen->tendanhmuc}}</td>
                                    <td>
                                    @if($t->kichhoat==0)
                                    <span class="text text-success">Đang kích hoạt</span>
                                    @else
                                    <span class="text text-success">Đang ẩn</span>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{route('truyen.edit', [$t->truyen_id])}}" class="btn btn-primary">Chỉnh sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{route('truyen.destroy', [$t->truyen_id])}}">
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
