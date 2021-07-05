@extends('admin.layouts.app')

@section('content')

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
<div>
    <a href="{{route('blog.index')}}" class="btn btn-primary">Back</a>
</div>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-3 align-self-center">
            <h4 class="page-title">Create Blog</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="card-body">

<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputtt">Title</label>
        <input type="text" value="{{old('title')}}" name="title" class="form-control" id="exampleInputtt" aria-describedby="emailHelp" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="exampleInputi">Image</label>
        <input type="file" name="image" class="form-control-file" id="exampleInputi" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputct">Content</label>
        <textarea id="demo" name="content" class="form-control" rows="8" style="resize:none"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>   
</div> 
@endsection
