<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PollType
 * @package App\Models
 * @version June 4, 2021, 5:58 pm UTC
 *
 * @property string $name
 */
class PollType extends Model
{

    use HasFactory;

    public $table = 'poll_types';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


    public function valueVote()
    {
        return $this->hasMany(VoteValue::class, 'poll_type_id');
    }


}
