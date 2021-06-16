@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm Sinh Viên') }}</div>
                
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

                    <form action="{{route('sinhvien.store')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputtct">Tên cầu thủ</label>
                            <input type="text" value="{{old('tensinhvien')}}"  name="tensinhvien" class="form-control" id="exampleInputtct" aria-describedby="emailHelp" placeholder="Tên sinh viên">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtuoi">Năm sinh</label>
                            <input type="text" value="{{old('namsinh')}}"  name="namsinh" class="form-control" id="exampleInputtuoi" aria-describedby="emailHelp" placeholder="Năm Sinh">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputqt">Lớp</label>
                            <input type="text" value="{{old('lop')}}"  name="lop" class="form-control" id="exampleInputqt" aria-describedby="emailHelp" placeholder="Lớp">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputvt">Quê quán</label>
                            <input type="text" value="{{old('quequan')}}"  name="quequan" class="form-control" id="exampleInputvt" aria-describedby="emailHelp" placeholder="Quê quán">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Thêm Sinh Viên</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
