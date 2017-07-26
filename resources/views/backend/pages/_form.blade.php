<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::text('title', null , ['class' => 'form-control', 'placeholder' => 'title']) }}
        </div>

        <div class="form-group">
            {{ Form::text('alias', null , ['class' => 'form-control', 'placeholder' => 'alias']) }}
        </div>
        <div class="form-group">
	        <textarea class="form-control" id="summernote" name="content"></textarea>
        </div>
        {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
        <a href="/backend/stores/{{ $store->id }}/pages">上一頁</a>
    </div>
</div>
