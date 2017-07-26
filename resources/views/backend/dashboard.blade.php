@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a>Create</a>
            @foreach($stores as $list)
            <div class="panel panel-default">
            <a class="btn btn-info pull-right">Enter</a>
                <div class="panel-heading">Domain-> {{ $list->domain}}</div>

                <div class="panel-body">
                    Infomation
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
