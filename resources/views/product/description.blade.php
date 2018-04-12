@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="lancamentos cat-home">Todos os produtos da L&eacute;a & Dio</h2>
        <div class="row">
            <div class="col-md-6 col-sm-6 img-prod">
                <img src='{{url("assets/imgs/products/editeds/{$product->image}")}}' class="img-fluid" id="imgproduct">
            </div>
            <div class="col-md-6 col-sm-6 desc-prod">
                <h2>Preço: R$ {{number_format($product->price,2)}}</h2>
                <p class="p-red">parcelamos 12x em compras a partir de R$60.00</p>

                <h4>Descri&ccedil;&atilde;o do produto</h4>
                <p>
                    {{$product->description}}
                </p>
                <a href="{{route('add-cart',$product->id)}}" class="btn btn-primary btn-lg btn-comprar">
                    Comprar<i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
@endsection