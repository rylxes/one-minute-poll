<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class File
 * @package App\Models
 * @version December 26, 2020, 10:37 pm UTC
 *
 * @property integer $library_id
 * @property string $url
 * @property string $name
 * @property boolean $is_lock
 * @property boolean $is_favourite
 */
class File extends Model
{

    use HasFactory;

    public $table = 'file';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'url',
        'name',
        'company_id',
        'is_lock',
        'is_favourite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'name' => 'string',
        'is_lock' => 'boolean',
        'company_id' => 'boolean',
        'is_favourite' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'is_lock' => 'required|boolean',
        'company_id' => 'required|integer',
        'is_favourite' => 'required|boolean'
    ];


}
