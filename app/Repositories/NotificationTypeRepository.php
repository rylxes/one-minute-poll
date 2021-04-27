<?php

namespace App\Repositories;

use App\Models\NotificationType;
use App\Repositories\BaseRepository;

/**
 * Class NotificationTypeRepository
 * @package App\Repositories
 * @version April 27, 2021, 4:56 am UTC
*/

class NotificationTypeRepository extends BaseRepository
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
        return NotificationType::class;
    }
}
