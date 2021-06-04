<?php

namespace App\Repositories;

use App\Models\Poll;
use App\Repositories\BaseRepository;

/**
 * Class PollRepository
 * @package App\Repositories
 * @version June 4, 2021, 5:57 pm UTC
*/

class PollRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'url',
        'code',
        'category_id',
        'user_id',
        'poll_type_id',
        'open_to_everyone',
        'question',
        'close_date'
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
        return Poll::class;
    }
}
