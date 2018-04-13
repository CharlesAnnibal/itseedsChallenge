@extends('layout.main')
@section('content')
    
        <h2>List of products</h2>
        <div class="row">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <table  class="table table-striped">
                <tbody>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Actions</th>
                    </tr>
                    @forelse($products as $product)
                        <tr class="productRow" value="{{$product->id}}"> 
                            <td>&nbsp;</td>
                            <td>{{$product->name}}</td>
                            <td>R${{number_format($product->cost, 2)}}</td>
                            <td>
                                <a href="{{route('edit',$product->id)}}" >Edit</a>
                                <a href="{{route('delete',$product->id)}}" class="delete" name="{{$product->name}}">Delete</a>
                            </td>
                        </tr> 
                    @empty
                        <p>No one product to show</p>
                    @endforelse 
                </tbody>
            </table>
        </div>
        
        <div class="row">
            <div class="col-10">
                {{ $products->links() }} 
            </div>
            <div class="col-2">
                <a href="{{route('create')}}" class="btn-success btn btn-lg float-right ">Create a new product</a>
            </div>
        </div>
  
@endsection