@extends('layout.main')
@section('content')
    
        <h2>List of products</h2>
        <div class="row">
        <table  class="table table-striped table-responsive table-responsive-sm">
        <tr>
            <th>&nbsp;</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Action</th>
        </tr>
        @forelse($products as $product)
            <tr onclick="window.location='{{route('product-show',$product->id)}}';"> 
                <td>&nbsp;</td>
                <td>{{$product->name}}</td>
                <td>R${{number_format($product->cost, 2)}}</td>
                <td>
                    <a href="{{route('product-show',$product->id)}}">Edit</a>
                    <a href="{{route('product-show',$product->id)}}">Delete</a>
                </td>
            </tr> 
        @empty
            <p>No one product to show</p>
        @endforelse 
    </table>
        </div>
        <div class="row">
        {{ $products->links() }}
        </div>
@endsection