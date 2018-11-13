<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Promo
 * @package App\Models
 * @version November 13, 2018, 1:50 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection Bill
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string name
 * @property string description
 * @property string voucher_code
 * @property string|\Carbon\Carbon start_date
 * @property string|\Carbon\Carbon end_date
 * @property integer quota
 * @property string info
 * @property boolean status
 */
class Promo extends Model
{
    public $table = 'promos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'voucher_code' => 'string',
        'quota' => 'integer',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bills()
    {
        return $this->hasMany(\App\Models\Bill::class);
    }
}
