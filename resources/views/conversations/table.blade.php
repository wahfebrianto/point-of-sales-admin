<table class="table table-responsive" id="conversations-table">
    <thead>
        <tr>
            <th>Conversation Date</th>
        <th>Sender</th>
        <th>Content</th>
        <th>Support Id</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($conversations as $conversation)
        <tr>
            <td>{!! $conversation->conversation_date !!}</td>
            <td>{!! $conversation->sender !!}</td>
            <td>{!! $conversation->content !!}</td>
            <td>{!! $conversation->support_id !!}</td>
            <td>{!! $conversation->info !!}</td>
            <td>{!! $conversation->status !!}</td>
            <td>
                {!! Form::open(['route' => ['conversations.destroy', $conversation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('conversations.show', [$conversation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('conversations.edit', [$conversation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>