@extends('layouts.app')

@section('content')
    <a href="#" class="btn btn-info pull-right" onclick="history.back();">上一頁</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $detail)
                    <div style="border: 5px;">
                        <div class="panel-heading">
                            <a href="/backend/stores/{{$detail->id}}/category/create">Create...商店網址{{$detail->domain}}</a>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>{{$detail->domail}}</li>
                                <li>{{$detail->link}}</li>
                                <li>{{$detail->position}}</li>
                                <li>{{$detail->nitem}}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection