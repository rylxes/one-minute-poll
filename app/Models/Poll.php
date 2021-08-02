<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Maher\Counters\Models\Counter;
use Maher\Counters\Traits\HasCounter;

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
    use HasCounter;

    public $table = 'polls';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'title',
        'uuid',
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


    public static function findByName($name)
    {
        $res = Poll::where(function ($query) use ($name) {
            $query
                ->orWhere('title', 'LIKE', '%' . $name . '%')
                ->orWhere('question', 'LIKE', '%' . $name . '%')
                ->orWhere('code', 'LIKE', '%' . $name . '%');
        })->get();
        return $res;
    }


    public function pollOptions()
    {
        return $this->hasMany(PollOption::class, 'poll_id');
    }


    public function pollOptionsWithCounter()
    {
       return $this->hasMany(PollOption::class, 'poll_id')->with('counters');
    }

    public function votes()
    {
        return $this->hasOne(Vote::class, 'poll_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function pollType()
    {
        return $this->belongsTo(PollType::class, 'poll_type_id');
    }

}
