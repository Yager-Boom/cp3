@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\CategoryController@update', $store_id, $category), 'class' => 'form-inline', 'method' => 'post')) !!}
                {{ Form::button('送出', ['type' => 'submit', 'class' => 'btn btn-success',  'title' => '送出'] )  }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection