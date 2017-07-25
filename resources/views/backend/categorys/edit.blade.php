@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{dd($edit_navs)}}
            {!! Form::open(array('action' => array('backend\CategoryController@update', $edit_navs))) !!}
                @include('backend/categorys/_form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
