<?php

namespace App\Repositories;

use App\Models\FolderFile;
use App\Repositories\BaseRepository;

/**
 * Class FolderFileRepository
 * @package App\Repositories
 * @version January 10, 2021, 1:16 pm UTC
*/

class FolderFileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'file_id',
        'folder_id'
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
        return FolderFile::class;
    }
}
