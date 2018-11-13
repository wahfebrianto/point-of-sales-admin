<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $message->id !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{!! $message->subject !!}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $message->content !!}</p>
</div>

<!-- Message Date Field -->
<div class="form-group">
    {!! Form::label('message_date', 'Message Date:') !!}
    <p>{!! $message->message_date !!}</p>
</div>

<!-- Clinic Id Field -->
<div class="form-group">
    {!! Form::label('clinic_id', 'Clinic Id:') !!}
    <p>{!! $message->clinic_id !!}</p>
</div>

<!-- Info Field -->
<div class="form-group">
    {!! Form::label('info', 'Info:') !!}
    <p>{!! $message->info !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $message->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $message->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $message->updated_at !!}</p>
</div>

