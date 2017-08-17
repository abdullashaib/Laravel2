<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polling extends Model
{
    
    /**
    * Fillable fields for Polling
    * 
    * @var array     
    */ 
    protected $fillable = ['name', 'number', 'shehia_id', 'constituency_id'];
    
    protected $table = 'pollingstations';
    
    /**
    * Polling Station belongs to a Shehia 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\belongsTo    
    */ 
    public function shehia() {
    
      return $this->belongsTo('App\Shehia');
      
    }
    
    /**
    * Polling Station belongs to a Constituent 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\belongsTo    
    */  
    public function constituent() {
    
      return $this->belongsTo('App\Constituent', 'constituency_id');
      
    }
    
    
    /**
    * Scope a query to only include constituent of logged in user.
    *
    * @param \Illuminate\Database\Eloquent\Builder $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopeConstit($query, $const)
    {
        return $query->where('votingconstituency_id', $const);
    }                                                    
    
    
}
