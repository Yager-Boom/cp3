@extends('layouts.app')

@section('content')
    <a href="#" class="btn btn-info pull-right" onclick="history.back();">上一頁</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $detail)
                    <div style="border-style:solid;">
                        商店網址{{$detail->domain}}
                        <div class="panel-heading">
                            <a href="/backend/stores/{{$detail->id}}/category/create">Create</a>
                                <br>
                            <a href="/backend/stores/{{$detail->id}}/category/edit">Edit</a>
                                <br>
                            {!! Form::open(array('action' => array('backend\CategoryController@destroy', $detail->id), 'class' => 'form-inline', 'method' => 'delete')) !!}
                                {{ Form::button('刪除', ['type' => 'submit', 'class' => 'btn btn-danger',  'title' => '刪除'] )  }}
                            {!! Form::close() !!}
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