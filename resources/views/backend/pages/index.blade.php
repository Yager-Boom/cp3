@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<a href="/backend/stores/{{ $request->store_id }}/pages/create">Create</a>
        	<a href="/backend/stores/{{ $request->store_id }}">上一頁</a>
        	@foreach($pages as $page)
	        	<div class="panel panel-default">
	            	<div class="panel-heading">
	                    <a href="/backend/stores/{{ $request->store_id }}/pages/{{ $page->alias }}">網址->{{ $page->alias }}</a>
	                </div>
	                <div class="panel-body">
	                	<h4>{{ $page->title }}</h4>
	                	{!! str_limit(strip_tags($page->content), 200) !!}
	                </div>
	            </div>
        	@endforeach
        </div>
    </div>
</div>
@endsection