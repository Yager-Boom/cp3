@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
			{{ Form::open(array('action' => array('backend\PagesController@destroy', $storeId, $page->alias), 'method' => 'delete')) }}
			<a href="/backend/stores/{{ $storeId }}/pages/{{ $page->alias }}/edit">編輯</a> 
			{{ Form::submit('刪除', ['class' => 'btn btn-link']) }}
			{{ Form::close() }}
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{ $page->title }}</h4>
				</div>
				<div class="panel-body">
					{!! $page->content !!}
				</div>
			</div>
			<a href="/backend/stores/{{ $storeId }}/pages">上一頁</a>
		</div>
	</div>
</div>
@endsection