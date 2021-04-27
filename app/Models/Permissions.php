<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission;

/**
 * Class Permissions
 * @package App\Models
 * @version April 27, 2021, 4:35 am UTC
 *
 * @property \App\Models\ModelHasPermission $modelHasPermission
 * @property \Illuminate\Database\Eloquent\Collection $roles
 * @property string $name
 * @property string $guard_name
 */
class Permissions extends Permission
{

    use HasFactory;

    public $table = 'permissions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'guard_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'guard_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'guard_name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

}
