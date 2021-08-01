<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Maher\Counters\Traits\HasCounter;

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
        'uuid',
        'user_id',
        'value'
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
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'poll_id' => 'required',
        'uuid' => 'nullable|string|max:255',
        'value' => 'required',
    ];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if (Auth::guard('api')->check()) {
                $model->user_id = Auth::guard('api')->user()->id;
            }
        });
        self::saving(function ($model) {
            if (Auth::guard('api')->check()) {
                $model->user_id = Auth::guard('api')->user()->id;
            }
        });
    }


    public function pollValue()
    {
        return $this->belongsTo(VoteValue::class, 'poll_value_id');
    }

}
