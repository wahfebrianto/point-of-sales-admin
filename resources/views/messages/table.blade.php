<table class="table table-responsive" id="messages-table">
    <thead>
        <tr>
            <th>Subject</th>
        <th>Content</th>
        <th>Message Date</th>
        <th>Clinic Id</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <td>{!! $message->subject !!}</td>
            <td>{!! $message->content !!}</td>
            <td>{!! $message->message_date !!}</td>
            <td>{!! $message->clinic_id !!}</td>
            <td>{!! $message->info !!}</td>
            <td>{!! $message->status !!}</td>
            <td>
                {!! Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('messages.show', [$message->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('messages.edit', [$message->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>