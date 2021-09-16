<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version June 4, 2021, 5:57 pm UTC
 *
 * @property string $name
 */
class SharedPoll extends Model
{

    use HasFactory;

    public $table = 'share_polls';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'email',
        'by',
        'poll_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
