<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasPermissions;

/**
 * Class Library
 * @package App\Models
 * @version December 26, 2020, 10:39 pm UTC
 *
 * @property string $name
 * @property integer $company_id
 * @property boolean $is_encrypted
 * @property boolean $is_favourite
 */
class Library extends Model
{

    use HasFactory;
    use LogsActivity;
    use HasPermissions;


    protected static $logFillable = true;
    protected $guard_name = 'api';
    protected static $submitEmptyLogs = false;
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }
    public $table = 'library';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'password',
        'description',
        'company_id',
        'is_encrypted',
        'is_favourite'
    ];

    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'password' => 'string',
        'description' => 'string',
        'company_id' => 'integer',
        'is_encrypted' => 'boolean',
        'is_favourite' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'password' => 'nullable|string',
        'company_id' => 'required|integer',
        'is_encrypted' => 'required|boolean',
        'is_favourite' => 'required|boolean',
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

    public function theUsers()
    {
        return $this->belongsToMany(User::class, 'library_users');
    }

    public function folders()
    {
        return $this->belongsToMany(Folder::class, 'library_folder');
    }

    public function theGroup()
    {
        return $this->belongsToMany(Group::class, 'library_groups');
    }


}
