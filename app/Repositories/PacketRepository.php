<?php

namespace App\Repositories;

use App\Models\Packet;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PacketRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:48 am UTC
 *
 * @method Packet findWithoutFail($id, $columns = ['*'])
 * @method Packet find($id, $columns = ['*'])
 * @method Packet first($columns = ['*'])
*/
class PacketRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'cost',
        'category',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Packet::class;
    }
}
