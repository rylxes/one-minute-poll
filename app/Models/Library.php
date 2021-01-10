<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Library
 * @package App\Models
 * @version December 26, 2020, 10:39 pm UTC
 *
 * @property string $name
 * @property integer $company_id
 * @property boolean $is_encrypted
 * @property boolean $is_favourite
 */
class Library extends Model
{

    use HasFactory;

    public $table = 'library';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'company_id',
        'is_encrypted',
        'is_favourite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'company_id' => 'integer',
        'is_encrypted' => 'boolean',
        'is_favourite' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'company_id' => 'required|integer',
        'is_encrypted' => 'required|boolean',
        'is_favourite' => 'required|boolean',

    ];


}
