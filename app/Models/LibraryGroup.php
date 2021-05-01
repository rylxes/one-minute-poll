<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class LibraryGroup
 * @package App\Models
 * @version December 26, 2020, 10:38 pm UTC
 *
 * @property integer $library_id
 * @property integer $group_id
 * @property boolean $is_shared
 */
class LibraryGroup extends Model
{

    use HasFactory;
    use LogsActivity;
    protected static $logFillable = true;
    protected static $submitEmptyLogs = false;
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }
    public $table = 'library_groups';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'library_id',
        'group_id',
        'is_shared'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'library_id' => 'integer',
        'group_id' => 'integer',
        'is_shared' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'library_id' => 'required|integer',
        'group_id' => 'required|integer',
        'is_shared' => 'required|boolean',

    ];


}
