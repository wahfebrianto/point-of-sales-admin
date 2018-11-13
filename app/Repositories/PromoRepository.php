<?php

namespace App\Repositories;

use App\Models\Promo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PromoRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:50 am UTC
 *
 * @method Promo findWithoutFail($id, $columns = ['*'])
 * @method Promo find($id, $columns = ['*'])
 * @method Promo first($columns = ['*'])
*/
class PromoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'voucher_code',
        'start_date',
        'end_date',
        'quota',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Promo::class;
    }
}
