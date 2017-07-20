@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/backend/stores/{{ $request->store_id }}/products/create">Create</a>
            @if($products != '')
                @foreach($products as $list)
                <div class="panel panel-default">

                    <div class="panel-heading">
                        商品名稱->{{ $list->title}}
                    </div>

                    <form action="/product_edit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$list->id}}" name="product_id">
                        <input type="submit" value="修改" name="product_id">
                    </form>
                    <form action="/product_delete" method="get">
                        <input type="hidden" value="{{$list->id}}" name="product_id">
                        <input type="submit" value="刪除" name="product_id">
                    </form>

                    <div class="panel-body">
                        <img src="{{ $list->cover }}" width="150px" height="150px">
                    </div>
                </div>
                @endforeach
            @endif  
        </div>
    </div>
</div>
@endsection
