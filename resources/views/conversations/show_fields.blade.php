<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $conversation->id !!}</p>
</div>

<!-- Conversation Date Field -->
<div class="form-group">
    {!! Form::label('conversation_date', 'Conversation Date:') !!}
    <p>{!! $conversation->conversation_date !!}</p>
</div>

<!-- Sender Field -->
<div class="form-group">
    {!! Form::label('sender', 'Sender:') !!}
    <p>{!! $conversation->sender !!}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{!! $conversation->content !!}</p>
</div>

<!-- Support Id Field -->
<div class="form-group">
    {!! Form::label('support_id', 'Support Id:') !!}
    <p>{!! $conversation->support_id !!}</p>
</div>

<!-- Info Field -->
<div class="form-group">
    {!! Form::label('info', 'Info:') !!}
    <p>{!! $conversation->info !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $conversation->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $conversation->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $conversation->updated_at !!}</p>
</div>

