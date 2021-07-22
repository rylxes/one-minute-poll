<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vote
 * @package App\Models
 * @version June 4, 2021, 5:59 pm UTC
 *
 * @property integer $poll_id
 * @property string $unique_id
 * @property integer $poll_value_id
 */
class Vote extends Model
{

    use HasFactory;

    public $table = 'votes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'poll_id',
        'unique_id',
        'poll_value_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'poll_id' => 'integer',
        'unique_id' => 'string',
        'poll_value_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'poll_id' => 'required|integer',
        'unique_id' => 'nullable|string|max:255',
        'poll_value_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


    public function pollValue()
    {
        return $this->belongsTo(VoteValue::class, 'poll_value_id');
    }

}
