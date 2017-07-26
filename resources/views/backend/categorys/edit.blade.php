@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\CategoryController@update', $store_id, $category), 'class' => 'form-inline', 'method' => 'PATCH')) !!}
            <div class="form-group">
                {{ Form::hidden('store_id', $store_id , ['class' => 'form-control']) }}
            </div>
        @foreach($details as $detail)
            <div class="form-group">
                {{ Form::text('category', $detail->category , ['class' => 'form-control', 'placeholder' => '輸入商品分類']) }}
            </div>
                <br>
            <div class="form-group">
                {{ Form::text('link', $detail->link , ['class' => 'form-control', 'placeholder' => 'link']) }}
            </div>
                <br>
            <div class="form-group">
                {{ Form::text('position', $detail->position , ['class' => 'form-control', 'placeholder' => 'position']) }}
            </div>
                <br>
            <div class="form-group">
                {{ Form::text('nitem', $detail->nitem , ['class' => 'form-control', 'placeholder' => 'nitem']) }}
            </div>
                <br>
            <div class="form-group">
                {{ Form::text('sort', $detail->sort , ['class' => 'form-control', 'placeholder' => 'sort']) }}
            </div>
                <br>
        @endforeach
                {{ Form::button('送出', ['type' => 'submit', 'class' => 'btn btn-success',  'title' => '送出'] )  }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection