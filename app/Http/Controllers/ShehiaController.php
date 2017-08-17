<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShehiaRequest;
use App\Shehia;
use App\Constituent;
use App\Word;
use App\User;

class ShehiaController extends Controller
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
	  * Display a listing of all shehia
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $shehias = Shehia::orderBy('constituency_id', 'ASC')->orderBy('word_id', 'ASC')->get();
      
      return view('shehias.index', compact('shehias'));
      
    }
    
    
    /**
	  * Display a listing of shehia based on user location
	  *
	  * @return Response Array
	  */
    public function getShehiaList() {
   
       $user = User::findOrFail(auth()->id());
       
       $shehias = Shehia::where('constituency_id', $user->constituency_id)->get(); 
       
       return view('shehias.shehiaList', compact('shehias'));
    
    }
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $constituents = Constituent::pluck('constituency','id');
      
      $constituents->all();
      
      $words = Word::orderBy('name','asc')->pluck('name','id');
      
      $words->all();
      
      return view('shehias.create', compact('constituents', 'words'));
      
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
	  * @param  \App\Shehia $shehia
	  * @return Response
	  */
    public function show( Shehia $shehia) {
     
      return view('shehia.show', compact('shehia'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Shehia $id
	  * @return Response
	  */
    public function edit($id) {
     
      $shehia = Shehia::findOrFail($id);
      
      $words = Word::pluck('name','id');
      
      $words->all();
      
      $constituents = Constituent::pluck('constituency','id');
      
      $constituents->all();
      
      return view('shehias.edit', compact('shehia', 'words', 'constituents'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Shehia $id
	  * @return Response
	  */
    public function update($id, ShehiaRequest $request) {
    
      $shehia = Shehia::findOrFail($id);
      
      $shehia->update($request->all());
      
      flash('Shehia updated ')->success();
      
      return redirect('shehias');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Shehia $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $shehia = Shehia::find($id);
      
      $shehia->delete();
      
      flash('Shehia deleted ')->success();
      
      return redirect('shehias');
      
    }

}
