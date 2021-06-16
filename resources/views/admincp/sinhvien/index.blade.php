@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê sinh viên ') }}</div>

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
                                <th scope="col">Tên sinh viên</th>
                                <th scope="col">Năm sinh</th>
                                <th scope="col">Lớp</th>
                                <th scope="col">Quê quán</th>
                                <th scope="col">sửa</th>
                                <th scope="col">Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sinhvien as $key => $sv)
                            <tr>
                                <th scope="row">{{$sv->sinhvien_id}}
                                    <td>{{$sv->tensinhvien}}</td>
                                    <td>{{$sv->namsinh}}</td>
                                    <td>{{$sv->lop}}</td>
                                    <td>{{$sv->quequan}}</td>
                                    <td>
                                        <a href="{{route('sinhvien.edit', [$sv->sinhvien_id])}}" class="btn btn-primary">Chỉnh sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{route('sinhvien.destroy', [$sv->sinhvien_id])}}" method="POST">
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
