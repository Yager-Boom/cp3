@extends('layouts.app')

@section('content')
	<a href="/backend/stores/{{ $store->id }}/category" class="btn btn-info pull-right">目錄頁</a>
	<a href="#" class="btn btn-info pull-right">店家頁</a>
<div class="container">
    <div class="row">
        <div class="col-md-3">
	        <ul>
	        	<li><a href="/backend/stores/{{ $store->id }}/products">商品</a></li>
	        </ul>
        </div>
        <div class="col-md-9">
		商店Dashboard{{ $store->id }}

		本日新增訂單
		未處理訂單

		放一些分析、提醒類的項目
        </div>
	</div>
</div>
@endsection