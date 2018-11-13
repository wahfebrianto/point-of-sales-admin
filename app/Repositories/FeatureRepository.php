<?php

namespace App\Repositories;

use App\Models\Feature;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FeatureRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:47 am UTC
 *
 * @method Feature findWithoutFail($id, $columns = ['*'])
 * @method Feature find($id, $columns = ['*'])
 * @method Feature first($columns = ['*'])
*/
class FeatureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Feature::class;
    }
}
