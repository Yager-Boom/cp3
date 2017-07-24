@extends('layouts.app')

@section('content')
    <a href="#" class="btn btn-info pull-right" onclick="history.back();">上一頁</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $detail)
                    <div class="panel-heading">
                        <a href="/backend/stores/{{$detail->id}}/category/create">Create...商店網址{{$detail->domain}}</a>
                    </div>
                    <div class="panel-body">
                        名稱名稱名稱...
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection