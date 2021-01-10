<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FolderFile
 * @package App\Models
 * @version January 10, 2021, 1:16 pm UTC
 *
 * @property integer $file_id
 * @property integer $folder_id
 */
class FolderFile extends Model
{

    use HasFactory;

    public $table = 'folders_file';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'file_id',
        'folder_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'file_id' => 'integer',
        'folder_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_id' => 'required|integer',
        'folder_id' => 'required|integer',
    ];


}
