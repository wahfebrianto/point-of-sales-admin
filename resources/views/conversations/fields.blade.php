<!-- Conversation Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conversation_date', 'Conversation Date:') !!}
    {!! Form::date('conversation_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Sender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender', 'Sender:') !!}
    {!! Form::text('sender', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Support Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('support_id', 'Support Id:') !!}
    {!! Form::text('support_id', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('conversations.index') !!}" class="btn btn-default">Cancel</a>
</div>
