<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Word extends Model
{
    
    /**
    * Fillable fields for Word
    * 
    * @var array     
    */ 
    protected $fillable = ['name', 'constituency_id', 'district_id'];
    
    protected $table = 'words';
    
    
    /**
    * Word belongs to a constituent 
    * 
    * @return \Illuminate\Database\Eloquent\Relations\belongsTo    
    */ 
    public function constituent() {
    
      return $this->belongsTo('App\Constituent', 'constituency_id');
      
    }
    
}
