<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constituent extends Model
{
    
    /**
    * Fillable fields for Constituent
    * 
    * @var array     
    */
    protected $fillable = ['constituency', 'district_id'];
    
    protected $table = 'constituency';
    
}
