@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\ProductsController@store', $store->id), 'files'=>true)) !!}
            @include('backend/products/_form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

