<?php

namespace App\Repositories;

use App\Models\Clinic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClinicRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:47 am UTC
 *
 * @method Clinic findWithoutFail($id, $columns = ['*'])
 * @method Clinic find($id, $columns = ['*'])
 * @method Clinic first($columns = ['*'])
*/
class ClinicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_name',
        'address',
        'phone_number',
        'city',
        'province',
        'email',
        'cp_name',
        'cp_phone_number',
        'cp_email',
        'bank_account_number',
        'bank_account_name',
        'bank_branch',
        'db_name',
        'directory',
        'cash_balance',
        'sms_balance',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clinic::class;
    }
}
