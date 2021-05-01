<?php

namespace App\Repositories;

use App\Models\FileComment;
use App\Repositories\BaseRepository;

/**
 * Class FileCommentRepository
 * @package App\Repositories
 * @version May 1, 2021, 11:25 am UTC
*/

class FileCommentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'file_id',
        'comment'
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
        return FileComment::class;
    }
}
