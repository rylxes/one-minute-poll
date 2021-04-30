<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class Setting
 * @package App\Models
 * @version December 26, 2020, 10:32 pm UTC
 *
 * @property string $type
 * @property string $value
 * @property integer $company_id
 */
class Setting extends Model
{

    use HasFactory;

    public $table = 'settings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'type',
        'value',
        'company_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'value' => 'string',
        'company_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'nullable|string|max:255',
        'value' => 'nullable|string|max:255',
        'company_id' => 'required|integer',

    ];


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CompanyScope());
        self::creating(function ($model) {
            if (Auth::check()) {
                $model->company_id = Auth::user()->theCompany->first()->id;
            }
        });
        self::saving(function ($model) {
            if (Auth::check()) {
                $model->company_id = Auth::user()->theCompany->first()->id;
            }
        });
    }



}
