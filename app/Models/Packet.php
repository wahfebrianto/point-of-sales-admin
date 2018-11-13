<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Packet
 * @package App\Models
 * @version November 13, 2018, 1:48 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string name
 * @property string description
 * @property decimal cost
 * @property string category
 * @property string info
 * @property boolean status
 */
class Packet extends Model
{
    public $table = 'packets';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'description',
        'cost',
        'category',
        'info',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'category' => 'string',
        'info' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function bills()
    {
        return $this->belongsToMany(\App\Models\Bill::class, 'bill_packet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function features()
    {
        return $this->belongsToMany(\App\Models\Feature::class, 'feature_packet');
    }
}
