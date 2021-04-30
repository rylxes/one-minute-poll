<?php

namespace App\Models;

use App\Scopes\CompanyScope;
use App\Scopes\UserScope;
use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class File
 * @package App\Models
 * @version December 26, 2020, 10:37 pm UTC
 *
 * @property integer $library_id
 * @property string $url
 * @property string $name
 * @property boolean $is_lock
 * @property boolean $is_favourite
 */
class File extends Model implements HasMedia
{

    use InteractsWithMedia;
    use HasFactory;

    public $table = 'file';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'url',
        'name',
        'password',
        'company_id',
        'is_lock',
        'is_favourite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'name' => 'string',
        'password' => 'string',
        'is_lock' => 'boolean',
        'company_id' => 'boolean',
        'is_favourite' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'nullable|string|max:255',
        'name' => 'required|string|max:255',
        'is_lock' => 'nullable|boolean',
        'company_id' => 'required|integer',
        'is_favourite' => 'nullable|boolean'
    ];


    public function folder()
    {
        return $this->belongsToMany(Folder::class, 'folders_file');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('Documents')
            ->singleFile();
    }

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
