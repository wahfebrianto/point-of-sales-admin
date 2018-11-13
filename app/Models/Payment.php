<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Payment
 * @package App\Models
 * @version November 13, 2018, 1:48 am UTC
 *
 * @property \App\Models\Bill bill
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string|\Carbon\Carbon payment_date
 * @property string bill_id
 */
class Payment extends Model
{
    public $table = 'payments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'payment_date',
        'bill_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'bill_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bill()
    {
        return $this->belongsTo(\App\Models\Bill::class);
    }
}
