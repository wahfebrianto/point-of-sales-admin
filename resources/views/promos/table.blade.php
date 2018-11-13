<table class="table table-responsive" id="promos-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Voucher Code</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Quota</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($promos as $promo)
        <tr>
            <td>{!! $promo->name !!}</td>
            <td>{!! $promo->description !!}</td>
            <td>{!! $promo->voucher_code !!}</td>
            <td>{!! $promo->start_date !!}</td>
            <td>{!! $promo->end_date !!}</td>
            <td>{!! $promo->quota !!}</td>
            <td>{!! $promo->info !!}</td>
            <td>{!! $promo->status !!}</td>
            <td>
                {!! Form::open(['route' => ['promos.destroy', $promo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('promos.show', [$promo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('promos.edit', [$promo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>