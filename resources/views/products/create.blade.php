@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Enter Product Details
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('products.store')}}">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="name">Product Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description">Product Description</label>
                            <input type="text" id="description" name="description" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="img">Product Image Url</label>
                            <input type="text" id="image" name="img" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" value="Add Product" class="btn btn-primary form-control" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
