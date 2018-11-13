<!-- Topup Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('topup_date', 'Topup Date:') !!}
    {!! Form::date('topup_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('method', 'Method:') !!}
    {!! Form::text('method', null, ['class' => 'form-control']) !!}
</div>

<!-- Proof Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proof_link', 'Proof Link:') !!}
    {!! Form::textarea('proof_link', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('topups.index') !!}" class="btn btn-default">Cancel</a>
</div>
