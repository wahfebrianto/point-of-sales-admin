<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Feature
 * @package App\Models
 * @version November 13, 2018, 1:47 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection Menu
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string name
 * @property string description
 * @property string info
 * @property boolean status
 */
class Feature extends Model
{

    public $table = 'features';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'description',
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
    public function packets()
    {
        return $this->belongsToMany(\App\Models\Packet::class, 'feature_packet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function menus()
    {
        return $this->hasMany(\App\Models\Menu::class);
    }
}
