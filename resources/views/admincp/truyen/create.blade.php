@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm truyện') }}</div>
                
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

                    <form action="{{route('truyen.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputtm">Tên truyện</label>
                            <input type="text" value="{{old('tentruyen')}}" onkeyup="ChangeToSlug();" name="tentruyen" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputsdm">Slug truyện</label>
                            <input type="text" value="{{old('slug_truyen')}}" name="slug_truyen" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputttt">Tóm tắt truyện</label>
                            <textarea id="exampleInputttt" name="tomtattruyen" class="form-control" rows="6" style="resize:none"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputdmt">Danh mục truyện</label>
                            <select id="exampleInputdmt" name="danhmuctruyen" class="custom-select">
                                @foreach($danhmuctruyen as $key => $dmt)
                                <option value="{{$dmt->danhmuc_id}}">{{$dmt->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputha">Hình ảnh truyện</label>
                            <input type="file" name="image_truyen" class="form-control-file" id="exampleInputha" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputkh">Kích hoạt/Ẩn</label>
                            <select id="exampleInputkh" name="kichhoat" class="custom-select">
                                <option value="0">Kích hoạt truyện</option>
                                <option value="1">Ẩn truyện</option>
                            </select>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
