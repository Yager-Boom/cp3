@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\StoresController@store'), 'files'=>true)) !!}
            @include('backend/stores/_form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
