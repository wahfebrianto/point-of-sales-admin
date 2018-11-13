<table class="table table-responsive" id="bills-table">
    <thead>
        <tr>
            <th>Bill Date</th>
        <th>Surcharge</th>
        <th>Subtotal</th>
        <th>Total</th>
        <th>Promo Id</th>
        <th>Clinic Id</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bills as $bill)
        <tr>
            <td>{!! $bill->bill_date !!}</td>
            <td>{!! $bill->surcharge !!}</td>
            <td>{!! $bill->subtotal !!}</td>
            <td>{!! $bill->total !!}</td>
            <td>{!! $bill->promo_id !!}</td>
            <td>{!! $bill->clinic_id !!}</td>
            <td>{!! $bill->info !!}</td>
            <td>{!! $bill->status !!}</td>
            <td>
                {!! Form::open(['route' => ['bills.destroy', $bill->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bills.show', [$bill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bills.edit', [$bill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>