<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\Role;
use App\Repositories\Roles;

class RoleController extends Controller
{

    /**
	   * @var $role
	   */
	   private $role;
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */ 
    public function __construct( Roles $roles ) {
    
      $this->middleware('auth');
      
      $this->role = $roles;
      
    }
    
    
    /**
	  * Display a listing of courses.
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $roles = $this->role->getAll();
      
      return view('roles.index', compact('roles'));
      
    }
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      return view('roles.create');
      
    }
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( RoleRequest $request) {
      
      Role::create([
        'name' => request('name'), 
        'description' => request('description')
      ]);
      
      flash('Role added successful')->success();
      
      return redirect('roles');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Role $role
	  * @return Response
	  */
    public function show( Role $role) {
     
      return view('roles.show', compact('role'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Course $id
	  * @return Response
	  */
    public function edit($id) {
     
      $role = $this->role->find($id);
      
      return view('roles.edit', compact('role'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Role $id
	  * @return Response
	  */
    public function update($id, Request $request) {
    
      $role = Role::findOrFail($id);
      
      $role->update($request->all());
      
      flash('Role updated ')->success();
      
      return redirect('roles');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Role $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $this->role->delete($id);
      
      flash('Role deleted ')->success();
      
      return redirect('roles');
      
    }
    
}
