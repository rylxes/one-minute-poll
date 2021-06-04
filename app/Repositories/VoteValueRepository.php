<?php

namespace App\Repositories;

use App\Models\VoteValue;
use App\Repositories\BaseRepository;

/**
 * Class VoteValueRepository
 * @package App\Repositories
 * @version June 4, 2021, 6:00 pm UTC
*/

class VoteValueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'poll_type_id',
        'name',
        'value'
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
        return VoteValue::class;
    }
}
