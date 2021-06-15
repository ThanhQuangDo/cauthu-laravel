@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm Chapter') }}</div>
                
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

                    <form action="{{route('chapter.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputtm">Tên Chapter</label>
                            <input type="text" value="{{old('tieude')}}" onkeyup="ChangeToSlug();" name="tieude" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="Tên chapter">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputsdm">Slug Chapter</label>
                            <input type="text" value="{{old('slug_chapter')}}" name="slug_chapter" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug chapter">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputttct">Tóm tắt Chapter</label>
                            <input type="text" value="{{old('tomtatchapter')}}" name="tomtatchapter" class="form-control" id="exampleInputttct" aria-describedby="emailHelp" placeholder="Tóm tắt chapter">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputnd">Nội dung</label>
                            <textarea id="exampleInputnd" name="noidung" class="form-control" rows="6" style="resize:none"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtvt">Thuộc về truyện</label>
                            <select id="exampleInputtvt" name="truyen_id" class="custom-select">
                                @foreach($truyen as $key => $t)
                                <option value="{{$t->truyen_id}}">{{$t->tentruyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputkh">Kích hoạt/Ẩn</label>
                            <select id="exampleInputkh" name="kichhoat" class="custom-select">
                                <option value="0">Kích hoạt Chapter</option>
                                <option value="1">Ẩn Chapter</option>
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
