<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $payment->id !!}</p>
</div>

<!-- Payment Date Field -->
<div class="form-group">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    <p>{!! $payment->payment_date !!}</p>
</div>

<!-- Bill Id Field -->
<div class="form-group">
    {!! Form::label('bill_id', 'Bill Id:') !!}
    <p>{!! $payment->bill_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $payment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $payment->updated_at !!}</p>
</div>

