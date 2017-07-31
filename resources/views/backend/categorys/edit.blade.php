@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\CategoryController@update', $store_id, $category), 'class' => 'form-inline', 'method' => 'PATCH')) !!}
            <div class="form-group">
                {{ Form::hidden('ctguid', $store_id , ['class' => 'form-control']) }}
            </div>
                <br>
        @foreach($details as $detail)
            <div class="form-group">
                limit_group:{{ Form::text('limit_group', $detail->link , ['class' => 'form-control']) }}
            </div>
                <br>
            <div class="form-group">
                banner:{{ Form::text('banner', $detail->position , ['class' => 'form-control']) }}
            </div>
                <br>
            <div class="form-group">
                citem:{{ Form::text('citem', $detail->nitem , ['class' => 'form-control']) }}
            </div>
                <br>
            <div class="form-group">
                sort:{{ Form::text('sort', $detail->sort , ['class' => 'form-control']) }}
            </div>
                <br>
        @endforeach
                {{ Form::button('送出', ['type' => 'submit', 'class' => 'btn btn-success',  'title' => '送出'] )  }}
            {!! Form::close() !!}
            <a href="#" class="btn btn-info pull-left" onclick="history.back();">上一頁</a>
        </div>
    </div>
</div>
@endsection