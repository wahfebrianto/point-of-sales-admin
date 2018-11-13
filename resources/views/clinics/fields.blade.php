<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::text('province', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp_name', 'Cp Name:') !!}
    {!! Form::text('cp_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp_phone_number', 'Cp Phone Number:') !!}
    {!! Form::text('cp_phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp_email', 'Cp Email:') !!}
    {!! Form::text('cp_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Account Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account_number', 'Bank Account Number:') !!}
    {!! Form::text('bank_account_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Account Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account_name', 'Bank Account Name:') !!}
    {!! Form::text('bank_account_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Branch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_branch', 'Bank Branch:') !!}
    {!! Form::text('bank_branch', null, ['class' => 'form-control']) !!}
</div>

<!-- Db Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('db_name', 'Db Name:') !!}
    {!! Form::text('db_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Directory Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('directory', 'Directory:') !!}
    {!! Form::textarea('directory', null, ['class' => 'form-control']) !!}
</div>

<!-- Cash Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cash_balance', 'Cash Balance:') !!}
    {!! Form::number('cash_balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Sms Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sms_balance', 'Sms Balance:') !!}
    {!! Form::number('sms_balance', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('clinics.index') !!}" class="btn btn-default">Cancel</a>
</div>
