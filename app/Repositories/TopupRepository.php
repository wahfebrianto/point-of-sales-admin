<?php

namespace App\Repositories;

use App\Models\Topup;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TopupRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:50 am UTC
 *
 * @method Topup findWithoutFail($id, $columns = ['*'])
 * @method Topup find($id, $columns = ['*'])
 * @method Topup first($columns = ['*'])
*/
class TopupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'topup_date',
        'total',
        'method',
        'proof_link',
        'clinic_id',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Topup::class;
    }
}
