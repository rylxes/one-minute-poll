<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Poll
 * @package App\Models
 * @version June 4, 2021, 5:57 pm UTC
 *
 * @property string $title
 * @property string $url
 * @property string $code
 * @property integer $category_id
 * @property integer $user_id
 * @property integer $poll_type_id
 * @property integer $open_to_everyone
 * @property string $question
 * @property string|\Carbon\Carbon $close_date
 */
class Poll extends AppModel
{

    use HasFactory;

    public $table = 'polls';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'title',
        'url',
        'code',
        'category_id',
        'user_id',
        'poll_type_id',
        'open_to_everyone',
        'question',
        'close_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'url' => 'string',
        'code' => 'string',
        'category_id' => 'integer',
        'user_id' => 'integer',
        'poll_type_id' => 'integer',
        'open_to_everyone' => 'integer',
        'question' => 'string',
        'close_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'url' => 'nullable|string|max:255',
        'code' => 'required|string|max:36',
        'category_id' => 'required|integer',
        'user_id' => 'nullable|integer',
        'poll_type_id' => 'required|integer',
        'open_to_everyone' => 'required',
        'question' => 'required|string',
        'close_date' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Poll Picture')
            ->singleFile();

    }


    public function pollOptions()
    {
        return $this->hasOne(PollOption::class, 'poll_id');
    }

    public function votes()
    {
        return $this->hasOne(Vote::class, 'poll_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
