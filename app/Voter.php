<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Voter extends Model
{
    /**
    * Fillable fields for Voter
    * 
    * @var array     
    */              
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'datebirth', 'gender', 'residentialaddress', 
        'pollingstation_id', 'residentialconstituency_id', 'votingconstituency_id', 'voterIDnumber',
        'lifestatus', 'user_id'
    ];
    
    protected $table = 'voters2015';
    
       
    /**
    * voter belongs to user 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
    */ 
    public function user() {
    
      return $this->belongsTo('App\User');
      
    }
    
    /**
    * voter belongs to voting Pollingstation
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
    */ 
    public function voterPollingstation() {
    
      return $this->belongsTo('App\Polling', 'pollingstation_id');
    }
    
    /**
    * voter belongs to voting constituent 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo    
    */ 
    public function voterConstituent() {
    
      return $this->belongsTo('App\Constituent', 'residentialconstituency_id');
    }
    
    /**
    * Make sure that firstname is capitalized BEFORE saving to the database
    * 
    * @param $value
    */
    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst($value);
    }
    
    /**
    * Make sure that lastname is capitalized BEFORE saving it to the database
    * 
    * @param $value
    */
    public function setLastnameAttribute($value)
    {
        $this->attributes['lastname'] = ucfirst($value);
    }
    
     
    /**
    * Get members full name
    * 
    * @return string
    */
    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->middlename) . ' ' . ucfirst($this->lastname);
    }
    
        
    /**
    * Scope a query to only include constituent of logged in user.
    *
    * @param $query and $const
    */
    public function scopeConstituent($query, $const)
    {
        return $query->where('votingconstituency_id', $const);
    }
    
    
    /**
    * Scope a query to only include polling station as parameter.
    *
    * @param $query and $poll
    */
    public function scopePolling($query, $poll)
    {
        return $query->where('pollingstation_id', $poll);
    }
    
    /**
    * Scope a query to orderby column names
    *
    * @param $query
    */
    public function scopeSortcolumn($query)
    {
        return $query->orderBy('firstname', 'ASC')->orderBy('lastname', 'ASC')->orderBy('gender', 'ASC');
    }
    
    
    /**
    * Scope a query for search
    *
    * @param $query and $s
    */
    public function scopeSearch($query, $s)
    {
        return $query->where('pollingstation_id', $poll);
    }
    
}
