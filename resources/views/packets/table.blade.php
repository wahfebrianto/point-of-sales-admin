<table class="table table-responsive" id="packets-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Category</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packets as $packet)
        <tr>
            <td>{!! $packet->name !!}</td>
            <td>{!! $packet->description !!}</td>
            <td>{!! $packet->cost !!}</td>
            <td>{!! $packet->category !!}</td>
            <td>{!! $packet->info !!}</td>
            <td>{!! $packet->status !!}</td>
            <td>
                {!! Form::open(['route' => ['packets.destroy', $packet->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packets.show', [$packet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('packets.edit', [$packet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>