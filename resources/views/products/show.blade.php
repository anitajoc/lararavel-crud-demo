@extends('products.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Product</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-xm-12 col-md-12">
        <div class="form-group">
            <strong>Nmae:</strong>
            {{ $product->name }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-xm-12 col-md-12">
        <div class="form-group">
            <strong>Detail:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>

@endsection