<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Rinvex\Subscriptions\Models\Plan;
use Spatie\Activitylog\Traits\LogsActivity;


class Plans extends Plan
{
    use HasFactory;
    use LogsActivity;
    protected static $logFillable = true;
    protected static $submitEmptyLogs = false;
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }
}
