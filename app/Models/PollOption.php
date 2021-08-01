<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Maher\Counters\Traits\HasCounter;

/**
 * Class PollOption
 * @package App\Models
 * @version July 18, 2021, 9:18 am UTC
 *
 * @property integer $poll_id
 * @property string $name
 * @property string $value
 * @property integer $count
 */
class PollOption extends Model
{

    use HasFactory;
    use HasCounter;

    public $table = 'poll_options';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'poll_id',
        'name',
        'vote_value_id',
        'value',
        'count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vote_value_id' => 'integer',
        'poll_id' => 'integer',
        'name' => 'string',
        'value' => 'string',
        'count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'poll_id' => 'required|integer',
        'name' => 'required|string|max:255',
        'value' => 'required|string|max:255',
        'count' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function poll()
    {
        return $this->belongsTo(Poll::Class, 'poll_id');
    }


}
