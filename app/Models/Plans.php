<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Rinvex\Subscriptions\Models\Plan;

/**
 * Class Plans
 * @package App\Models
 * @version February 12, 2021, 5:45 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $planFeatures
 * @property \Illuminate\Database\Eloquent\Collection $planSubscriptions
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property boolean $is_active
 * @property number $price
 * @property number $signup_fee
 * @property string $currency
 * @property integer $trial_period
 * @property string $trial_interval
 * @property integer $invoice_period
 * @property string $invoice_interval
 * @property integer $grace_period
 * @property string $grace_interval
 * @property boolean $prorate_day
 * @property boolean $prorate_period
 * @property boolean $prorate_extend_due
 * @property integer $active_subscribers_limit
 * @property integer $sort_order
 */
class Plans extends Plan
{
    use HasFactory;

}
