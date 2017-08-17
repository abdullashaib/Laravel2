<?php

namespace App\Repositories;

use App\User;
use App\Voter;
use App\Polling;
use App\Constituent;
use App\District;
use App\PollingShehia;


class Voters {

    /**
	  * Voters based on user logged in.
	  *
	  * @return Response Array
	  */
    public function all() {
    
        $user = User::findOrFail(auth()->id());
      
        return Polling::findOrFail($user->constituency_id);
    
    } 

}
