<?php

namespace App\Repositories;

use App\Models\Bill;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BillRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:52 am UTC
 *
 * @method Bill findWithoutFail($id, $columns = ['*'])
 * @method Bill find($id, $columns = ['*'])
 * @method Bill first($columns = ['*'])
*/
class BillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bill_date',
        'surcharge',
        'subtotal',
        'total',
        'promo_id',
        'clinic_id',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bill::class;
    }
}
