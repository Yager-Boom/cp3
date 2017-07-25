@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\CategoryController@update',$edit_navs))) !!}
                123
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
