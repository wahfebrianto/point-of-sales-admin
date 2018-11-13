<table class="table table-responsive" id="clinics-table">
    <thead>
        <tr>
            <th>Company Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>City</th>
        <th>Province</th>
        <th>Email</th>
        <th>Cp Name</th>
        <th>Cp Phone Number</th>
        <th>Cp Email</th>
        <th>Bank Account Number</th>
        <th>Bank Account Name</th>
        <th>Bank Branch</th>
        <th>Db Name</th>
        <th>Directory</th>
        <th>Cash Balance</th>
        <th>Sms Balance</th>
        <th>Info</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clinics as $clinic)
        <tr>
            <td>{!! $clinic->company_name !!}</td>
            <td>{!! $clinic->address !!}</td>
            <td>{!! $clinic->phone_number !!}</td>
            <td>{!! $clinic->city !!}</td>
            <td>{!! $clinic->province !!}</td>
            <td>{!! $clinic->email !!}</td>
            <td>{!! $clinic->cp_name !!}</td>
            <td>{!! $clinic->cp_phone_number !!}</td>
            <td>{!! $clinic->cp_email !!}</td>
            <td>{!! $clinic->bank_account_number !!}</td>
            <td>{!! $clinic->bank_account_name !!}</td>
            <td>{!! $clinic->bank_branch !!}</td>
            <td>{!! $clinic->db_name !!}</td>
            <td>{!! $clinic->directory !!}</td>
            <td>{!! $clinic->cash_balance !!}</td>
            <td>{!! $clinic->sms_balance !!}</td>
            <td>{!! $clinic->info !!}</td>
            <td>{!! $clinic->status !!}</td>
            <td>
                {!! Form::open(['route' => ['clinics.destroy', $clinic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clinics.show', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clinics.edit', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>