<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


// class Customer extends Model
// {
//     //
// }

class Customer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'email', 'password',
    ];
    // protected $table = customers;
    // protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}