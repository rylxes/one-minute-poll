<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Kalnoy\Nestedset\NodeTrait;
/**
 * Class Folder
 * @package App\Models
 * @version December 26, 2020, 10:30 pm UTC
 *
 * @property string $name
 * @property integer $file_id
 * @property integer $_lft
 * @property integer $_rgt
 * @property integer $parent_id
 */
class Folder extends Model
{

    use NodeTrait;
    use HasFactory;

    public $table = 'folders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        '_lft',
        '_rgt',
        'company_id',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_lft' => 'integer',
        '_rgt' => 'integer',
        'parent_id' => 'integer',
        'company_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'parent_id' => 'nullable|integer'
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


}
