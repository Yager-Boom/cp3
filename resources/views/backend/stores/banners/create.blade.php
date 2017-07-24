@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\BannersController@store', $store->id), 'files'=>true)) !!}
            @include('backend/stores/banners/_form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
