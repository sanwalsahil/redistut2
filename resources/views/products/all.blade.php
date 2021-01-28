@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @if($products)
            <div class="row justify-content-center">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{$product['name']}}</div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <img src="{{$product['img']}}" width="100%">
                        </div>
                        <div class="col-md-12">
                            <b>DESCRIPTION: </b>
                            <p>
                                {{$product['description']}}
                            </p>
                        </div>
                        <div class="col-md-12">
                            <a href="{{route('products.edit',['product'=>$product['id']])}}" class="btn btn-primary btn-sm">EDIT</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        @else
            No products
        @endif
    </div>
@endsection
