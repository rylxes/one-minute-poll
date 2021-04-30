<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use Rinvex\Subscriptions\Traits\HasSubscriptions;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;
    use HasApiTokens;
    use HasSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'two_factor_secret',
        'has2fa',
        'email',
        'password',
    ];

    protected $fields = ['two_factor'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'two_factor_secret',
        'remember_token',
    ];


    /**
     * Ecrypt the user's google_2fa secret.
     *
     * @param  string  $value
     * @return string
     */
    public function setTwoFactorSecretAttribute($value)
    {
        $this->attributes['two_factor_secret'] = encrypt($value);
    }


    /**
     * Decrypt the user's google_2fa secret.
     *
     * @param  string  $value
     * @return string
     */
    public function getTwoFactorAttribute()
    {
        return decrypt($this->attributes['two_factor_secret']);
    }


    /**
     * Decrypt the user's google_2fa secret.
     *
     * @param  string  $value
     * @return string
     */
    public function getTwoFactorSecretAttribute($value)
    {
        return decrypt($value);
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->belongsToMany(Company::class, 'company_user');
    }

    public function theCompany()
    {
        return $this->belongsToMany(Company::class, 'company_user');
    }

    public function theLibrary()
    {
        return $this->belongsToMany(Library::class, 'library_users');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_groups');
    }

    public function sendPasswordResetNotification($token)
    {
       // $url = 'https://example.com/reset-password?token='.$token;
        $this->notify(new ResetPasswordNotification($token));
    }
}
