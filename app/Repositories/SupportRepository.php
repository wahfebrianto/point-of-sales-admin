<?php

namespace App\Repositories;

use App\Models\Support;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SupportRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:50 am UTC
 *
 * @method Support findWithoutFail($id, $columns = ['*'])
 * @method Support find($id, $columns = ['*'])
 * @method Support first($columns = ['*'])
*/
class SupportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'support_date',
        'subject',
        'clinic_id',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Support::class;
    }
}
