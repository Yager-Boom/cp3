<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::text('category', null , ['class' => 'form-control', 'placeholder' => '輸入商品分類']) }}
        </div>
            {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
        <a href="/backend">上一頁</a>
    </div>
</div>