<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Conversation
 * @package App\Models
 * @version November 13, 2018, 1:51 am UTC
 *
 * @property \App\Models\Support support
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string|\Carbon\Carbon conversation_date
 * @property string sender
 * @property string content
 * @property string support_id
 * @property string info
 * @property boolean status
 */
class Conversation extends Model
{
    public $table = 'conversations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'conversation_date',
        'sender',
        'content',
        'support_id',
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
        'sender' => 'string',
        'content' => 'string',
        'support_id' => 'string',
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
    public function support()
    {
        return $this->belongsTo(\App\Models\Support::class);
    }
}
