<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Log
 * @package App\Models
 * @version November 13, 2018, 1:53 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string category
 * @property string message
 * @property integer user_id
 * @property string ip_address
 * @property string data
 */
class Log extends Model
{
    public $table = 'logs';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'category',
        'message',
        'user_id',
        'ip_address',
        'data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category' => 'string',
        'message' => 'string',
        'user_id' => 'integer',
        'ip_address' => 'string',
        'data' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
