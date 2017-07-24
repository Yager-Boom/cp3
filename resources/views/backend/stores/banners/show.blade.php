<img src="{{ $banner->img }}" width="500px" height="500px">

{!! Form::open(array('action' => array('backend\BannersController@update', $store_id, $banner->id),'method' => 'put')) !!}
{!! Form::selectRange('sort', 1, 5, ['class' => 'form-control', 'placeholder' => $banner->sort]) !!}

{!! Form::select('target', array('0' => '主頁面', '1' => '商品頁') , ['class' => 'form-control', 'placeholder' => $banner->target]) !!}
{!! Form::select('status', array('0' => '關閉', '1' => '開啟') , ['class' => 'form-control', 'placeholder' => $banner->status]) !!}
{!! Form::submit('確定', ['class' => 'form-control']) !!}
{!! Form::close() !!}
