<fieldset class="text-center form-group">
<input type="checkbox"> Create split test: Use this advertising campaign to test advert set strategies
</fieldset>
<fieldset class="text-center form-group">
  <div class="form-group row justify-content-md-center">
    <label for="Campaign" class="col-2 col-form-label">計畫名稱</label>
    <div class="col-6">    
    {{ Form::text('domain', null , ['class' => 'form-control domain', 'placeholder' => '輸入商店網址']) }}
    </div>

  </div>
  <div class="form-group row justify-content-md-center">
    <label for="Campaign" class="col-2 col-form-label">logo</label>
    <div class="col-6">    
      {{ Form::file('file') }} 
    </div>

  </div>
</fieldset>
