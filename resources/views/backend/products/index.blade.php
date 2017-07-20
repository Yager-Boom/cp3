@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/backend/stores/{{ $request->store_id }}/products/create">Create</a>
            @if($products != '')
                @foreach($products as $list)
                <div class="panel panel-default">
                    {!! Form::open(array('action' => array('backend\ProductsController@destroy', $request->store_id , $list->id), 'class' => 'form-inline', 'method' => 'delete')) !!}

                    {{ Form::button('刪除', ['type' => 'submit', 'class' => 'btn btn-danger',  'title' => '刪除'] )  }}

                    {!! Form::close() !!}
                    <div class="panel-heading">
                        商品名稱->{{ $list->title}}
                    </div>

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
