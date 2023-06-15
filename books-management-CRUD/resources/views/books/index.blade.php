@extends('layouts.app') @section('main')


@if (session('message'))
<div class="alert alert-success">
    {{ session("message") }}
</div>
@endif
<div class="container">
    <div class="text-end col-auto mx-auto">
        <a href="books/create" class="btn btn-success mt-3">Add Book</a>
    </div>
    <div class="d-flex align-items-center col-auto mx-auto mt-2">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">PRODUCT CODE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col" class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $boo)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$boo->title}}</td>
                    <td>{{$boo->price}}</td>
                    <td>{{$boo->product_code}}</td>
                    <td>{{$boo->description}}</td>
                    <td class="text-center"><a href="books/{{$boo->id}}/edit" class="btn btn-primary btn-sm">EDIT</a>
                        <a href="books/{{$boo->id}}/show" class="btn btn-success btn-sm">VIEW</a>
                        <a href="books/{{$boo->id}}/delete" class="btn btn-danger btn-sm">DELETE</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection