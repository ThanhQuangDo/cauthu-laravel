@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê Cầu thủ') }}</div>

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
                                <th scope="col">Tên cầu thủ</th>
                                <th scope="col">Tuổi</th>
                                <th scope="col">Quốc tịch</th>
                                <th scope="col">Vị trí</th>
                                <th scope="col">Lương</th>
                                <th scope="col">sửa</th>
                                <th scope="col">Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cauthu as $key => $ct)
                            <tr>
                                <th scope="row">{{$ct->cauthu_id}}
                                    <td>{{$ct->tencauthu}}</td>
                                    <td>{{$ct->tuoi}}</td>
                                    <td>{{$ct->quoctich}}</td>
                                    <td>{{$ct->vitri}}</td>
                                    <td>{{$ct->luong}}</td>
                                    
                                    <td>
                                        <a href="{{route('cauthu.edit', [$ct->cauthu_id])}}" class="btn btn-primary">Chỉnh sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{route('cauthu.destroy', [$ct->cauthu_id])}}">
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
