<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LibraryUsers
 * @package App\Models
 * @version December 26, 2020, 10:38 pm UTC
 *
 * @property integer $user_id
 * @property integer $library_id
 * @property boolean $is_shared
 */
class LibraryUsers extends Model
{

    use HasFactory;

    public $table = 'library_users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'library_id',
        'is_shared'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'library_id' => 'integer',
        'is_shared' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'library_id' => 'required|integer',
        'is_shared' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
