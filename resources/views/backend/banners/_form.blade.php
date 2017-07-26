<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'name']) }}
        </div>

        <div class="form-group">
            順序（由小至大）{{ Form::selectRange('sort', 1, 5, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            顯示頁面 {{ Form::select('target', array('0' => '主頁面', '1' => '商品頁') , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            圖片 {{ Form::file('img') }} 
        </div>
        <div class="form-group">
            {{ Form::hidden('tmpPath', $randStr , ['class' => 'form-control tmpPath']) }}
        </div> 
        <a href="/backend/stores/{{ $store->id }}/banners">上一頁</a>        
        {{ Form::submit('建立', array('class' => 'btn btn-success')) }}
    </div>
</div>
