@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
	        <ul>
	        	<li><a href="/backend/stores/{{ $store->id }}/products">商品</a></li>
	        	<li><a href="/backend/stores/{{ $store->id }}/banners">橫幅</a></li>
	        	<li><a href="/backend/stores/{{ $store->id }}/pages">文章</a></li>
    				<li><a href="/backend/stores/{{ $store->id }}/category">目錄</a></li>
	        </ul>
        </div>

        <div class="col-md-9 coverflow">
			商店Dashboard{{ $store->id }}

			本日新增訂單
			未處理訂單

			放一些分析、提醒類的項目
        	<hr>
        	@if($banners)
		        <div style="width:300px; height:400px">
			        <div id="mycarousel" class="carousel slide" data-ride="carousel">
					  	<!-- Indicators -->
					  	<ol class="carousel-indicators">
					  		@foreach($banners as $key => $banner)
						    	<li data-target="#mycarousel" data-slide-to="{{ $key }}" class="@if($key == 0) active @endif"></li>
						    @endforeach
					  	</ol>	

					  	<!-- Wrapper for slides -->
					  	<div class="carousel-inner" role="listbox">
					  		@foreach($banners as $key => $banner)
						    	<div class="item @if($key == 0) active @endif">
							      	<img src="{{ $banner->img }}" alt="...">
							      	<div class="carousel-caption">
							        	
							      	</div>
							    </div>	
						 	@endforeach
					  	</div>

					  	<!-- Controls -->
					  	<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
					    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
					    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
				</div>
			@endif
			<hr>
			<div>
				@if($page)
					<h4>{{ $page->title }}</h4>
					{!! $page->content !!}
				@endif
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	if($('.coverflow .carousel-inner div.item').length < 2) 
	{ 
		$('.carousel-indicators, .carousel-control').hide();
	}
</script>

@endsection