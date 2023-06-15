@extends('layouts.app')
@section('main')
<!-- @if($message = Session::get('success'))
<div class="alert alert-success alert-block"><strong>{{$message}}</strong></div>
@endif -->

<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-3">
                <p>
                    NAME : <b>{{$book->title}}</b>
                </p>
                <p>
                    PRICE : <b>{{$book->price}}</b>
                </p>
                <p>
                    PRODUCT CODE : <b>{{$book->product_code}}</b>
                </p>
                <p>
                    DESCRIPTION : <b>{{$book->description}}</b>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection