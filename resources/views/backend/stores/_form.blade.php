<div class="row">
    <div class="col-md-12">
        <div class="form-group">
	        {{ Form::text('domain', null , ['class' => 'form-control', 'placeholder' => 'yourdomain.com.tw']) }}
        </div>
        <div class="form-group">
	        {{ Form::text('shippingfree', null , ['class' => 'form-control', 'placeholder' => '免運門檻']) }}
        </div>     
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    Logo{{ Form::file('logo') }} 
                </div>
            </div>
        </div>        
        {{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
    </div>
</div>