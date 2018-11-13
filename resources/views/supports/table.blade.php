<table class="table table-responsive" id="supports-table">
    <thead>
        <tr>
            <th>Support Date</th>
        <th>Subject</th>
        <th>Clinic Id</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($supports as $support)
        <tr>
            <td>{!! $support->support_date !!}</td>
            <td>{!! $support->subject !!}</td>
            <td>{!! $support->clinic_id !!}</td>
            <td>{!! $support->info !!}</td>
            <td>{!! $support->status !!}</td>
            <td>
                {!! Form::open(['route' => ['supports.destroy', $support->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('supports.show', [$support->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('supports.edit', [$support->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>