<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Constituent;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'phone_number', 'email', 'password', 'constituency_id', 'role_id'
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
    * User has many constituents
    * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany    
    */ 
    public function constituents() {
    
        return $this->hasMany(Constituent::class);
    
    }
}
