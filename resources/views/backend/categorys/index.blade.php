@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <a href="#" class="btn btn-info pull-left" onclick="history.back();">上一頁</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $detail)
                    <div style="border-style:solid;">
                        商店名稱:{{$detail->domain}}
                        <div class="panel-heading">
                            <a href="/backend/stores/{{$detail->usid}}/category/create">
                                <button class="btn btn-success">新增</button>
                            </a>
                                    <br>
                            @if(isset($detail->id))
                                    <br>
                                {!! Form::open(array('action' => array('backend\CategoryController@edit', $detail->id, $detail->nid), 'class' => 'form-inline', 'method' => 'get')) !!}
                                    {{ Form::hidden('nid', $detail->nid ) }}
                                    {{ Form::button('修改', ['type' => 'submit', 'class' => 'btn btn-primary',  'title' => '修改'] )  }}
                                {!! Form::close() !!}
                                    <br>
                                {!! Form::open(array('action' => array('backend\CategoryController@destroy', $detail->id, $detail->store_id), 'class' => 'form-inline', 'method' => 'delete')) !!}
                                    {{ Form::hidden('nid', $detail->nid ) }}
                                    {{ Form::button('刪除', ['type' => 'submit', 'class' => 'btn btn-danger',  'title' => '刪除'] )  }}
                                {!! Form::close() !!}
                            @endif
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>名　　稱：{{$detail->domain}}</li>
                                <li>
                                    連　　結：
                                    <a href="{{$detail->link}}">
                                        {{$detail->link}}
                                    </a>
                                </li>
                                <li>位　　址：{{$detail->position}}</li>
                                <li>分　　類：{{$detail->nitem}}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection