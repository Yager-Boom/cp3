@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	{!! Form::open(array('action' => array('backend\PagesController@update', $storeId, $page->alias), 'method' => 'put')) !!}
	        <div class="form-group">
	            {{ Form::text('title', $page->title , ['class' => 'form-control']) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::select('status', array('0' => '關閉', '1' => '開啟'), $page->status) }}
	        </div>
	        <div class="form-group">
	            {{ Form::text('alias', $page->alias , ['class' => 'form-control']) }}
	        </div>
	        <div class="form-group">
		        <textarea class="form-control" id="summernote" name="content">{!! $page->content !!}</textarea>
	        </div>
	        {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
	        <a href="/backend/stores/{{ $storeId }}/pages/{{ $page->alias }}">上一頁</a>
		</div>
	</div>
</div>
@endsection