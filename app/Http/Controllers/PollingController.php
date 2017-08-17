<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Polling;
use App\User;
use App\Constituent;
use App\Shehia;

class PollingController extends Controller
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
	  * Display a listing of all polling station
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $user = User::findOrFail(auth()->id());
      
      $pollings = Polling::all(); //where('constituency_id', $user->constituency_id)->get();
      
      return view('pollings.index', compact('pollings'));
      
    }
    
    
    /**
	  * Display a listing of polling stations based on user location
	  *
	  * @return Response Array
	  */
    public function getPollingList() {
   
       $user = User::findOrFail(auth()->id());
       
       $pollings = Polling::where('constituency_id', $user->constituency_id)->get(); 
       
       return view('pollings.pollingList', compact('pollings'));
    
    }
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $user = User::findOrFail(auth()->id());
      
      $constituents = Constituent::pluck('constituency','id');
      
      $constituents->all();
      
      $shehias = Shehia::where('constituency_id', $user->constituency_id)->orderBy('name','asc')->pluck('name','id');
      
      return view('pollings.create', compact('constituents', 'shehias'));
      
    }
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( ShehiaRequest $request) {
      
      Shehia::create([
        'name' => request('name'), 
        'word_id' => request('word_id'),
        'constituency_id' => request('constituency_id'),
        'residents' => request('residents'),
        'registered' => request('registered'),
      ]);
      
      flash('Shehia added successful')->success();
      
      return redirect('shehias');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Constituent $constituent
	  * @return Response
	  */
    public function show( Polling $polling) {
     
      return view('pollings.show', compact('polling'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Constituent $id
	  * @return Response
	  */
    public function edit($id) {
     
      $polling = Polling::findOrFail($id);
      
      $shehias = Shehia::pluck('name','id');
      
      $constituents = Constituent::pluck('constituency','id');
      
      return view('pollings.edit', compact('polling', 'shehias', 'constituents'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Constituent $id
	  * @return Response
	  */
    public function update($id, PollingRequest $request) {
    
      $pollings = Polling::findOrFail($id);
      
      $pollings->update($request->all());
      
      flash('Polling station updated ')->success();
      
      return redirect('pollings');
    
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
