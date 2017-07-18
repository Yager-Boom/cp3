<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::text('title', null , ['class' => 'form-control', 'placeholder' => 'title']) }}
        </div>

        <div class="form-group">
            {{ Form::text('sn', null , ['class' => 'form-control', 'placeholder' => 'sn']) }}
        </div>
        <div class="form-group">
            {{ Form::text('alias', null , ['class' => 'form-control', 'placeholder' => 'alias']) }}
        </div>
        <div class="form-group">
            {{ Form::text('cost_price', null , ['class' => 'form-control', 'placeholder' => 'cost_price']) }}
        </div>
        <div class="form-group">
            {{ Form::text('default_price', null , ['class' => 'form-control', 'placeholder' => 'default_price']) }}
        </div>
        <div class="form-group">
            封面{{ Form::file('cover') }} 
        </div>
        <div class="form-group">
	        <textarea class="form-control" id="summernote" name="content"></textarea>
        </div>
        <div class="form-group">
            {{ Form::hidden('tmpPath', $randStr , ['class' => 'form-control tmpPath']) }}
        </div> 
        {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
        <a href="/backend">上一頁</a>
    </div>
</div>
