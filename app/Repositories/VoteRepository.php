<?php

namespace App\Repositories;

use App\Models\Vote;
use App\Repositories\BaseRepository;

/**
 * Class VoteRepository
 * @package App\Repositories
 * @version June 4, 2021, 5:59 pm UTC
*/

class VoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'poll_id',
        'unique_id',
        'poll_value_id'
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
        return Vote::class;
    }
}
