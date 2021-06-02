<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class FileComments
 * @package App\Models
 * @version December 26, 2020, 10:37 pm UTC
 *
 * @property integer $file_id
 * @property string $comment
 */
class FileComment extends Model
{

    use HasFactory;
    use LogsActivity;

    protected static $logFillable = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }

    public $table = 'file_comments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'file_id',
        'user_id',
        'comment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'file_id' => 'integer',
        'user_id' => 'integer',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_id' => 'required|integer',
        'comment' => 'required|string|max:255',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


    protected static function boot()
    {
        parent::boot();
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
