<?php

namespace App\Repositories;

use App\Models\FileTag;
use App\Repositories\BaseRepository;

/**
 * Class FileTagRepository
 * @package App\Repositories
 * @version May 1, 2021, 11:29 am UTC
*/

class FileTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'file_id',
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
        return FileTag::class;
    }
}
