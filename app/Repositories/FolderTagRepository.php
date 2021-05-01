<?php

namespace App\Repositories;

use App\Models\FolderTag;
use App\Repositories\BaseRepository;

/**
 * Class FolderTagRepository
 * @package App\Repositories
 * @version May 1, 2021, 11:29 am UTC
*/

class FolderTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'folder_id',
        'tag_id'
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
        return FolderTag::class;
    }
}
