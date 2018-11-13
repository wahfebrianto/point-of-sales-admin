<table class="table table-responsive" id="topups-table">
    <thead>
        <tr>
            <th>Topup Date</th>
        <th>Total</th>
        <th>Method</th>
        <th>Proof Link</th>
        <th>Clinic Id</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($topups as $topup)
        <tr>
            <td>{!! $topup->topup_date !!}</td>
            <td>{!! $topup->total !!}</td>
            <td>{!! $topup->method !!}</td>
            <td>{!! $topup->proof_link !!}</td>
            <td>{!! $topup->clinic_id !!}</td>
            <td>{!! $topup->info !!}</td>
            <td>{!! $topup->status !!}</td>
            <td>
                {!! Form::open(['route' => ['topups.destroy', $topup->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('topups.show', [$topup->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('topups.edit', [$topup->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>