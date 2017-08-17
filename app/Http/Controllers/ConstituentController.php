<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConstituentRequest;
use App\Constituent;
use App\District;

class ConstituentController extends Controller
{
    
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */ 
    public function __construct() {
    
      $this->middleware('auth');
      
    }
    
    
    /**
	  * Display a listing of constituents.
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $constituents = Constituent::all();
      
      return view('constituents.index', compact('constituents'));
      
    }
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $districts = District::pluck('name','id');
      
      $districts->all();
      
      return view('constituents.create', compact('districts'));
      
    }
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( ConstituentRequest $request) {
      
      Constituent::create([
        'constituency' => request('constituency'), 
        'district_id' => request('district_id')
      ]);
      
      flash('Constituent added successful')->success();
      
      return redirect('constituents');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Constituent $constituent
	  * @return Response
	  */
    public function show( Constituent $constituent) {
     
      return view('constituents.show', compact('constituent'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Constituent $id
	  * @return Response
	  */
    public function edit($id) {
     
      $constituent = Constituent::findOrFail($id);
      
      $districts = District::pluck('name','id');
      
      return view('constituents.edit', compact('constituent', 'districts'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Constituent $id
	  * @return Response
	  */
    public function update($id, ConstituentRequest $request) {
    
      $role = Constituent::findOrFail($id);
      
      $role->update($request->all());
      
      flash('Constituent updated ')->success();
      
      return redirect('constituents');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Constituent $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $constituent = Constituent::find($id);
      
      $constituent->delete();
      
      flash('Constituent deleted ')->success();
      
      return redirect('constituents');
      
    }

}
