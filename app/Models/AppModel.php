<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class AppModel extends Model implements HasMedia
{
    protected $guard_name = 'api';
    use InteractsWithMedia;

}
