<?php

namespace App\Models;

use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class Profile
 * @package App\Models
 * @version December 26, 2020, 10:41 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property integer $user_id
 * @property string $avatar
 */
class Profile extends Model implements HasMedia
{

    use HasFactory;
    use InteractsWithMedia;

    public $table = 'profiles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'avatar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'user_id' => 'integer',
        'avatar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'user_id' => 'required|integer',
        'avatar' => 'nullable|string|max:255',

    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new UserScope());
        self::creating(function ($model) {
            if (Auth::check()) {
                $model->user_id = Auth::user()->id;
            }
        });
        self::saving(function ($model) {
            if (Auth::check()) {
                $model->user_id = Auth::user()->id;
            }
        });
    }



}
