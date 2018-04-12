@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="lancamentos cat-home">{{$title}}</h2>
        <div class="row">
            <div class="col-md-6 col-sm-6 desc-prod">
                <p>Name:  {{$product->name}}</p>
                <p>Cost:  {{number_format($product->cost,2)}} €</p>
                <p>Created at:  {{$product->created_at}}</p>
                <p>Updated at:  {{$product->updated_at}}</p>

                <a href="{{route('destroy',$product->id)}}" class="btn-success btn btn-lg">Confirm Delete</a>
                <a href="{{route('index')}}" class="btn-success btn btn-lg">Back</a>
                
            </div>
        </div>
    </div>
    
@endsection