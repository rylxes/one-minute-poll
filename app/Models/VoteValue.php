<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class VoteValue
 * @package App\Models
 * @version June 4, 2021, 6:00 pm UTC
 *
 * @property integer $poll_type_id
 * @property string $name
 * @property string $value
 */
class VoteValue extends Model
{

    use HasFactory;

    public $table = 'vote_values';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'poll_type_id',
        'name',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'poll_type_id' => 'integer',
        'name' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'poll_type_id' => 'required|integer',
        'name' => 'required|string|max:255',
        'value' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
