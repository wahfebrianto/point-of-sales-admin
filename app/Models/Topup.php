<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Topup
 * @package App\Models
 * @version November 13, 2018, 1:50 am UTC
 *
 * @property \App\Models\Clinic clinic
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string|\Carbon\Carbon topup_date
 * @property decimal total
 * @property string method
 * @property string proof_link
 * @property string clinic_id
 * @property string info
 * @property boolean status
 */
class Topup extends Model
{
    public $table = 'topups';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'topup_date',
        'total',
        'method',
        'proof_link',
        'clinic_id',
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
        'method' => 'string',
        'proof_link' => 'string',
        'clinic_id' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinic()
    {
        return $this->belongsTo(\App\Models\Clinic::class);
    }
}
