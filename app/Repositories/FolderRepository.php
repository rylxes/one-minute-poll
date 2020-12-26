<?php

namespace App\Repositories;

use App\Models\Folder;
use App\Repositories\BaseRepository;

/**
 * Class FolderRepository
 * @package App\Repositories
 * @version December 26, 2020, 10:30 pm UTC
*/

class FolderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'file_id',
        '_lft',
        '_rgt',
        'parent_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Folder::class;
    }
}
