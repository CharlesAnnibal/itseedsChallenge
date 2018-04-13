@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="lancamentos cat-home">{{$title}}</h2>
        <div class="row">
            <div class="col desc-prod">
                <p>Name:  {{$product->name}}</p>
                <p>Cost:  {{number_format($product->cost,2)}} €</p>
                <p>Created at:  {{$product->created_at}}</p>
                <p>Updated at:  {{$product->updated_at}}</p>

                <a href="{{route('edit',$product->id)}}" class="btn-success btn btn-lg btn-form">Edit</a>
                <a href="{{route('delete',$product->id)}}" class="btn-success delete btn btn-lg btn-form">Delete</a>
                <a href="{{route('index')}}" class="btn-success btn btn-lg btn-form">Back</a>
                
            </div>
        </div>
    </div>
    
@endsection