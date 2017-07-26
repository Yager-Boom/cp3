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
                        <div class="panel-body pull-right">
                            {!! Form::open(array('action' => array('backend\BannersController@setting', $request->store_id, $list->id),'method' => 'put')) !!}
                            <h4 style="text-align: center;">設定</h4>
                            {!! Form::text('name', $list->name, ['class' => 'form-control', 'placeholder' => $list->name]) !!}
                            {!! Form::selectRange('sort', 1, 5, ['class' => 'form-control', 'placeholder' => $list->sort]) !!}

                            {!! Form::select('target', array('0' => '主頁面', '1' => '商品頁') , ['class' => 'form-control', 'placeholder' => $list->target]) !!}
                            {!! Form::select('status', array('0' => '關閉', '1' => '開啟') , ['class' => 'form-control', 'placeholder' => $list->status]) !!}
                            {!! Form::submit('確定', ['class' => 'form-control']) !!}
                            {!! Form::close() !!}
                            {!! Form::open(array('action' => array('backend\BannersController@destroy', $request->store_id, $list->id),'method' => 'delete')) !!}
                            {!! Form::submit('刪除', ['class' => 'form-control']) !!}
                            {!! Form::close() !!}
                        </div>

                        <div class="panel-body">
                            <img src="{{ $list->img }}" width="150px" height="150px">
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
