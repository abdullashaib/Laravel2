<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Constituent;

class Shehia extends Model
{
    
    /**
    * Fillable fields for Shehia
    * 
    * @var array     
    */
    protected $fillable = ['name', 'word_id', 'constituency_id', 'residents', 'registered'];
    
    protected $table = 'shehia';
    
    /**
    * Shehia belongs to a constituent 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\belongsTo    
    */ 
    public function constituent() {
    
      return $this->belongsTo('App\Constituent','constituency_id');
      
    }
    
    /**
    * Shehia belongs to a Word 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\belongsTo    
    */ 
    public function word() {
    
      return $this->belongsTo('App\Word','word_id');
      
    }
    
    
}
