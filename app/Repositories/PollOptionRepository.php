<?php

namespace App\Repositories;

use App\Models\PollOption;
use App\Repositories\BaseRepository;

/**
 * Class PollOptionRepository
 * @package App\Repositories
 * @version July 18, 2021, 9:18 am UTC
*/

class PollOptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'poll_id',
        'name',
        'value',
        'count'
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
        return PollOption::class;
    }
}
