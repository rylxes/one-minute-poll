<?php

namespace App\Repositories;

use App\Models\PollType;
use App\Repositories\BaseRepository;

/**
 * Class PollTypeRepository
 * @package App\Repositories
 * @version June 4, 2021, 5:58 pm UTC
*/

class PollTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return PollType::class;
    }
}
