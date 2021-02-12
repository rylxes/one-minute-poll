<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

/**
 * Class Group
 * @package App\Models
 * @version February 12, 2021, 5:33 am UTC
 *
 * @property string $name
 * @property string $description
 * @property integer $company_id
 */
class Group extends Model
{

    use HasFactory;

    public $table = 'groups';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'description',
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
        'description' => 'string',
        'company_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
        'company_id' => 'required|integer',
    ];


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CompanyScope());
        self::creating(function ($model) {
            if (Auth::check()) {
                $model->company_id = Auth::user()->company->id;
            }
        });
        self::saving(function ($model) {
            if (Auth::check()) {
                $model->company_id = Auth::user()->company->id;
            }
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_groups');
    }



}
