<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CompanyUser
 * @package App\Models
 * @version December 26, 2020, 10:40 pm UTC
 *
 * @property integer $company_id
 * @property integer $user_id
 */
class CompanyUser extends Model
{

    use HasFactory;

    public $table = 'company_user';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'company_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_id' => 'required|integer',
        'user_id' => 'required|integer',

    ];


}
