<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clinic
 * @package App\Models
 * @version November 13, 2018, 1:47 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection Bill
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection Message
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection Support
 * @property \Illuminate\Database\Eloquent\Collection Topup
 * @property string company_name
 * @property string address
 * @property string phone_number
 * @property string city
 * @property string province
 * @property string email
 * @property string cp_name
 * @property string cp_phone_number
 * @property string cp_email
 * @property string bank_account_number
 * @property string bank_account_name
 * @property string bank_branch
 * @property string db_name
 * @property string directory
 * @property decimal cash_balance
 * @property decimal sms_balance
 * @property string info
 * @property boolean status
 */
class Clinic extends Model
{
    public $table = 'clinics';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'company_name',
        'address',
        'phone_number',
        'city',
        'province',
        'email',
        'cp_name',
        'cp_phone_number',
        'cp_email',
        'bank_account_number',
        'bank_account_name',
        'bank_branch',
        'db_name',
        'directory',
        'cash_balance',
        'sms_balance',
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
        'company_name' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
        'city' => 'string',
        'province' => 'string',
        'email' => 'string',
        'cp_name' => 'string',
        'cp_phone_number' => 'string',
        'cp_email' => 'string',
        'bank_account_number' => 'string',
        'bank_account_name' => 'string',
        'bank_branch' => 'string',
        'db_name' => 'string',
        'directory' => 'string',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function messages()
    {
        return $this->hasMany(\App\Models\Message::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function supports()
    {
        return $this->hasMany(\App\Models\Support::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function topups()
    {
        return $this->hasMany(\App\Models\Topup::class);
    }
}
