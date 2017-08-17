<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    /**
    * Fillable fields for Role
    * 
    * @var array     
    */
    protected $fillable = ['name', 'description'];
    
    /**
    * Get name field tobe capitalized
    * 
    * @return string
    */
    public function getNameAttribute($value) {
    
        return ucfirst($value);
    
    }
    
    /**
    * Make sure that name BEFORE saving to the database
    * 
    * @param $value
    */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
