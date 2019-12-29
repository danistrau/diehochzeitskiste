<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'total_budget',
    ];

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



    public function checklist()
    {
    return $this->hasMany(Checklist::class);
    }
    public function blog()
    {
    return $this->hasMany(Blog::class);
    }
    public function budget()
    {
    return $this->hasMany(Budget::class);
    }
    public function usersBudgets()
    {
    return $this->hasMany(UsersBudgets::class);
    }
}
