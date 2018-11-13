<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Menu
 * @package App\Models
 * @version November 13, 2018, 1:48 am UTC
 *
 * @property \App\Models\Feature feature
 * @property \Illuminate\Database\Eloquent\Collection billPacket
 * @property \Illuminate\Database\Eloquent\Collection bills
 * @property \Illuminate\Database\Eloquent\Collection featurePacket
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string name
 * @property string display_name
 * @property string description
 * @property string icon
 * @property string parent_menu
 * @property string feature_id
 * @property string info
 * @property boolean status
 */
class Menu extends Model
{
    public $table = 'menus';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'display_name',
        'description',
        'icon',
        'parent_menu',
        'feature_id',
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
        'display_name' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'parent_menu' => 'string',
        'feature_id' => 'string',
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
    public function feature()
    {
        return $this->belongsTo(\App\Models\Feature::class);
    }
}
