<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FileComments
 * @package App\Models
 * @version December 26, 2020, 10:37 pm UTC
 *
 * @property integer $file_id
 * @property string $comment
 */
class FileComments extends Model
{

    use HasFactory;

    public $table = 'file_comments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'file_id',
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


}
