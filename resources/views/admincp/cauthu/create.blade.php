@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm Cầu thủ') }}</div>
                
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

                    <form action="{{route('cauthu.store')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputtct">Tên cầu thủ</label>
                            <input type="text" value="{{old('tencauthu')}}"  name="tencauthu" class="form-control" id="exampleInputtct" aria-describedby="emailHelp" placeholder="Tên cầu thủ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtuoi">Tuổi cầu thủ</label>
                            <input type="text" value="{{old('tuoi')}}"  name="tuoi" class="form-control" id="exampleInputtuoi" aria-describedby="emailHelp" placeholder="Tuổi">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputqt">Quốc tịch cầu thủ</label>
                            <input type="text" value="{{old('quoctich')}}"  name="quoctich" class="form-control" id="exampleInputqt" aria-describedby="emailHelp" placeholder="quốc tịch">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputvt">Vị trí cầu thủ</label>
                            <input type="text" value="{{old('vitri')}}"  name="vitri" class="form-control" id="exampleInputvt" aria-describedby="emailHelp" placeholder="vị trí">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputl">Vị trí cầu thủ</label>
                            <input type="text" value="{{old('luong')}}"  name="luong" class="form-control" id="exampleInputl" aria-describedby="emailHelp" placeholder=" lương">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Thêm cầu thủ</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
