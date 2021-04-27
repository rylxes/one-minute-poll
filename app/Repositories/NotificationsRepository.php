<?php

namespace App\Repositories;

use App\Models\Notifications;
use App\Repositories\BaseRepository;

/**
 * Class NotificationsRepository
 * @package App\Repositories
 * @version April 27, 2021, 4:56 am UTC
*/

class NotificationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'notification_type_id',
        'user_id'
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
        return Notifications::class;
    }
}
