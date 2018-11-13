<!-- Support Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('support_date', 'Support Date:') !!}
    {!! Form::date('support_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Clinic Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinic_id', 'Clinic Id:') !!}
    {!! Form::text('clinic_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::text('info', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('supports.index') !!}" class="btn btn-default">Cancel</a>
</div>
