<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::hidden('ctguid', $stores->id , ['class' => 'ctguid']) }}
        </div>
        <div class="form-group">
            {{ Form::text('limit_group', null , ['class' => 'form-control', 'placeholder' => 'limit_group']) }}
        </div>
        <div class="form-group">
            {{ Form::text('banner', null , ['class' => 'form-control', 'placeholder' => 'banner']) }}
        </div>
        <div class="form-group">
            {{ Form::text('citem', null , ['class' => 'form-control', 'placeholder' => 'citem']) }}
        </div>
        <div class="form-group">
            {{ Form::text('sort', null , ['class' => 'form-control', 'placeholder' => 'sort']) }}
        </div>

            {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
        <a href="/backend">上一頁</a>
    </div>
</div>