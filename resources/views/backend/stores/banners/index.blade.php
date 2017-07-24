@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/backend/stores/{{ $request->store_id }}/banners/create">Create</a>
            <a href="/backend/stores/{{ $request->store_id }}">上一頁</a>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                @if($banners != '')
                    @foreach($banners as $list)
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            橫幅名稱->{{ $list->name }}
                        </div>

                        <div class="panel-body">
                            <a href="/backend/stores/{{ $request->store_id }}/banners/{{ $list->id }}"><img src="{{ $list->img }}" width="150px" height="150px"></a>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
