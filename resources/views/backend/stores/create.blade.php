@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach(123 as )
            {!! Form::open(array('action' => array('backend\StoresController@store'), 'files'=>true)) !!}
            @include('backend/stores/_form')
            {!! Form::close() !!}
            @endforeach
        </div>
    </div>
</div>
@endsection
