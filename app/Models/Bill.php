<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Bill
 * @package App\Models
 * @version November 13, 2018, 1:52 am UTC
 *
 * @property \App\Models\Clinic clinic
 * @property \App\Models\Promo promo
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection Payment
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string|\Carbon\Carbon bill_date
 * @property decimal surcharge
 * @property decimal subtotal
 * @property decimal total
 * @property integer promo_id
 * @property string clinic_id
 * @property string info
 * @property boolean status
 */
class Bill extends Model
{

    public $table = 'bills';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'promo_id' => 'integer',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function promo()
    {
        return $this->belongsTo(\App\Models\Promo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function packets()
    {
        return $this->belongsToMany(\App\Models\Packet::class, 'bill_packet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function payments()
    {
        return $this->hasMany(\App\Models\Payment::class);
    }
}
