@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\PagesController@store', $store->id))) !!}
            @include('backend/pages/_form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

