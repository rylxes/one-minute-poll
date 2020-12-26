<?php

namespace App\Repositories;

use App\Models\Library;
use App\Repositories\BaseRepository;

/**
 * Class LibraryRepository
 * @package App\Repositories
 * @version December 26, 2020, 10:39 pm UTC
*/

class LibraryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'company_id',
        'is_encrypted',
        'is_favourite'
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
        return Library::class;
    }
}
