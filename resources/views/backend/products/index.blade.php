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

                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$list->id}}" name="product_id">
                        <input type="submit" class="btn btn-danger" value="修改" name="product_id">
                    </form>
                    {!! Form::open(array('action' => array('backend\ProductsController@destroy', $request->store_id , $list->id), 'class' => 'form-inline', 'method' => 'delete')) !!}

                    {{ Form::button('刪除', ['type' => 'submit', 'class' => 'btn btn-danger',  'title' => '刪除'] )  }}

                    {!! Form::close() !!}

                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$list->id}}" name="product_id">
                        <input type="submit" value="修改" name="product_id">
                    </form>
                    {!! Form::open(array('action' => array('backend\ProductsController@destroy', $request->store_id , $list->id), 'class' => 'form-inline', 'method' => 'delete')) !!}

                    {{ Form::button('dd', ['type' => 'submit', 'class' => 'btn btn-danger',  'title' => '刪除'] )  }}

                    {!! Form::close() !!}


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
