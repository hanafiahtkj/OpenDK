<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Question <span class="required">*</span></label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('question', null, ['placeholder' => 'Question','class' => 'form-control', 'required'=>true]) !!}
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Answer <span class="required">*</span></label>

    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('answer', null,['class'=>'textarea', 'placeholder'=>'Some Answer here', 'style'=>'width: 100%;
         height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;', 'required'=>'required']) !!}
    </div>
</div>
<div class="ln_solid"></div>
