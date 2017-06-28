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
        'name', 'email', 'password', 'is_store', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'is_store', 'is_admin'
    ];
    protected $casts = [
        'is_admin' => 'boolean',
        'is_store' => 'boolean',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }
    
    public function isStore()
    {
        return $this->is_store;
    }

    public function stores()
    {
        return $this->belongsToMany('App\Store', 'user_stores', 'user_id', 'store_id');
    }    
}
