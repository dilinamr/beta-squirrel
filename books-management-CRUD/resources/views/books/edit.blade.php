@extends('layouts.app')
@section('main')
<!-- @if($message = Session::get('success'))
<div class="alert alert-success alert-block"><strong>{{$message}}</strong></div>
@endif -->

<div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="col-6 py-5 justify-content-center">
        <form method="post" action="/books/{{$book->id}}/update">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">TITLE</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title',$book->title)}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">PRICE</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('name',$book->price)}}">
            </div>
            <div class="mb-3">
                <label for="product_code" class="form-label">PRODUCT CODE</label>
                <input type="text" class="form-control" id="product_code" name="product_code" value="{{old('name',$book->product_code)}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPTION</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('name',$book->description)}}">
            </div>
            <div class="row">
                <div class="">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection