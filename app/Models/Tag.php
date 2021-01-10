<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tag
 * @package App\Models
 * @version December 26, 2020, 10:36 pm UTC
 *
 * @property string $name
 * @property string $colour
 * @property integer $company_id
 */
class Tag extends Model
{

    use HasFactory;

    public $table = 'tags';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'colour',
        'company_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'colour' => 'string',
        'company_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'colour' => 'nullable|string|max:255',
        'company_id' => 'required|integer',

    ];


}
