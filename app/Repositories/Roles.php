<?php

namespace App\Repositories;

use App\Role;

class Roles {

  /**
	 * Get all roles.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
    public function getAll() {
    
        return Role::all();
        
    }
    
    /**
	   * Get role by $id.
	   *
	   * @return App\Role
	   */
    public function find($id) {
    
        return Role::findOrFail($id);
    
    }
    
    
    /**
	   * Delete a task.
	   *
	   *
	   * @return boolean
	   */
	   public function delete($id) {
     
        return Role::find($id)->delete();
      
     }


}
