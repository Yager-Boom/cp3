<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::text('category', null , ['class' => 'form-control', 'placeholder' => '輸入商品分類']) }}
        </div>

        <div class="form-group">
            {{ Form::text('store_id', $stores->id , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::text('link', null , ['class' => 'form-control', 'placeholder' => 'link']) }}
        </div>
        <div class="form-group">
            {{ Form::text('position', null , ['class' => 'form-control', 'placeholder' => 'position']) }}
        </div>
        <div class="form-group">
            {{ Form::text('nitem', null , ['class' => 'form-control', 'placeholder' => 'nitem']) }}
        </div>
        <div class="form-group">
            {{ Form::text('sort', null , ['class' => 'form-control', 'placeholder' => 'sort']) }}
        </div>

            {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
        <a href="/backend">上一頁</a>
    </div>
</div>