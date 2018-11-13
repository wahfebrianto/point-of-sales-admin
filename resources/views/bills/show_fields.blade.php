<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $bill->id !!}</p>
</div>

<!-- Bill Date Field -->
<div class="form-group">
    {!! Form::label('bill_date', 'Bill Date:') !!}
    <p>{!! $bill->bill_date !!}</p>
</div>

<!-- Surcharge Field -->
<div class="form-group">
    {!! Form::label('surcharge', 'Surcharge:') !!}
    <p>{!! $bill->surcharge !!}</p>
</div>

<!-- Subtotal Field -->
<div class="form-group">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{!! $bill->subtotal !!}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{!! $bill->total !!}</p>
</div>

<!-- Promo Id Field -->
<div class="form-group">
    {!! Form::label('promo_id', 'Promo Id:') !!}
    <p>{!! $bill->promo_id !!}</p>
</div>

<!-- Clinic Id Field -->
<div class="form-group">
    {!! Form::label('clinic_id', 'Clinic Id:') !!}
    <p>{!! $bill->clinic_id !!}</p>
</div>

<!-- Info Field -->
<div class="form-group">
    {!! Form::label('info', 'Info:') !!}
    <p>{!! $bill->info !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $bill->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $bill->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $bill->updated_at !!}</p>
</div>

