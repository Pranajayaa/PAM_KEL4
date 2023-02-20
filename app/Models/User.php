<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $username
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    static $rules = [
		'name' => 'required',
		'username' => 'required',
		'email' => 'required',
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','username','email','password','phone','picture'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
