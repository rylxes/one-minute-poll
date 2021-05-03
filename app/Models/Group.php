<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

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

    use LogsActivity;

    protected static $logFillable = true;
    protected static $submitEmptyLogs = false;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'description',
        'created_by',
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
                $model->company_id = Auth::user()->theCompany->first()->id;
                $model->created_by = Auth::user()->id;
            }
        });
        self::saving(function ($model) {
            if (Auth::check()) {
                $model->company_id = Auth::user()->theCompany->first()->id;
                $model->created_by = Auth::user()->id;;
            }
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_groups');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


}
