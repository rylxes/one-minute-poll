<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FileTags
 * @package App\Models
 * @version December 26, 2020, 10:35 pm UTC
 *
 * @property integer $file_id
 * @property integer $tag_id
 */
class FileTags extends Model
{

    use HasFactory;

    public $table = 'file_tags';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'file_id',
        'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'file_id' => 'integer',
        'tag_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_id' => 'required|integer',
        'tag_id' => 'required|integer',

    ];


}
