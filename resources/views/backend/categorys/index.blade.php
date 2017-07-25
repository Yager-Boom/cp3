@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="#" class="btn btn-info pull-left" onclick="history.back();">上一頁</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $detail)
                    <div style="border-style:solid;">
                        商店網址:{{$detail->domain}}
                        <div class="panel-heading">
                            <a href="/backend/stores/{{$detail->id}}/category/create">Create</a>
                            @if(isset($detail->id))
                                    <br>
                                <a href="/backend/stores/{{$detail->id}}/category/edit">Edit</a>
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