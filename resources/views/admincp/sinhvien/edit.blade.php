@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cập nhật thông tin sinh viên') }}</div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('sinhvien.update', [$sinhvien->sinhvien_id])}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputtct">Tên Sinh Viên</label>
                            <input type="text" value="{{$sinhvien->tensinhvien}}"  name="tensinhvien" class="form-control" id="exampleInputtct" aria-describedby="emailHelp" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtuoi">Năm sinh</label>
                            <input type="text" value="{{$sinhvien->namsinh}}"  name="namsinh" class="form-control" id="exampleInputtuoi" aria-describedby="emailHelp" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputqt">Lớp</label>
                            <input type="text" value="{{$sinhvien->lop}}"  name="lop" class="form-control" id="exampleInputqt" aria-describedby="emailHelp" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputvt">Quê quán</label>
                            <input type="text" value="{{$sinhvien->quequan}}"  name="quequan" class="form-control" id="exampleInputvt" aria-describedby="emailHelp" >
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Cập nhật sinh viên</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
