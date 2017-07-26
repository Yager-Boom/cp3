@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\CategoryController@update', $store_id, $category), 'class' => 'form-inline', 'method' => 'PATCH')) !!}
            <div class="form-group">
                {{ Form::hidden('store_id', $store_id , ['class' => 'form-control']) }}
            </div>
                <br>
        @foreach($details as $detail)
            <div class="form-group">
                連結:{{ Form::text('link', $detail->link , ['class' => 'form-control']) }}
            </div>
                <br>
            <div class="form-group">
                位置:{{ Form::text('position', $detail->position , ['class' => 'form-control']) }}
            </div>
                <br>
            <div class="form-group">
                項目:{{ Form::text('nitem', $detail->nitem , ['class' => 'form-control']) }}
            </div>
                <br>
            <div class="form-group">
                排序:{{ Form::text('sort', $detail->sort , ['class' => 'form-control']) }}
            </div>
                <br>
        @endforeach
                {{ Form::button('送出', ['type' => 'submit', 'class' => 'btn btn-success',  'title' => '送出'] )  }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection