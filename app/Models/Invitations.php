<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invitations extends Model
{

    use HasFactory;

    public $table = 'invitations';

    public $timestamps = false;


    public $fillable = [
        'company_id',
        'email',
    ];


    protected $casts = [
        'company_id' => 'integer',
        'email' => 'string'
    ];


}
