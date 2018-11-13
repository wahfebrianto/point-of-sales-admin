<!-- Bill Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_date', 'Bill Date:') !!}
    {!! Form::date('bill_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Surcharge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surcharge', 'Surcharge:') !!}
    {!! Form::number('surcharge', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Promo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promo_id', 'Promo Id:') !!}
    {!! Form::number('promo_id', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('bills.index') !!}" class="btn btn-default">Cancel</a>
</div>
