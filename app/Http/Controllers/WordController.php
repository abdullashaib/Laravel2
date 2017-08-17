<?php

namespace App\Http\Controllers;

use App\Http\Requests\WordRequest;
use App\Word;
use App\District;
use App\Constituent;

class WordController extends Controller
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
	  * Display a listing of words.
	  *
	  * @return Response Array
	  */
    public function index() {
      
      $words = Word::orderBy('constituency_id', 'ASC')->get();
      
      return view('words.index', compact('words'));
      
    }
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
      
      $districts = District::pluck('name','id');
      
      $districts->all();
      
      $constituents = Constituent::pluck('constituency','id');
      
      $constituents->all();
      
      return view('words.create', compact('districts', 'constituents'));
      
    }
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( WordRequest $request) {
      
      Word::create([
        'name' => request('name'), 
        'constituency_id' => request('constituency_id'), 
        'district_id' => request('district_id')
      ]);
      
      flash('Word added successful')->success();
      
      return redirect('words');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Word $word
	  * @return Response
	  */
    public function show( Word $word) {
     
      return view('word.show', compact('word'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Word $id
	  * @return Response
	  */
    public function edit($id) {
     
      $word = Word::findOrFail($id);
      
      $districts = District::pluck('name','id');
      
      $constituents = Constituent::pluck('constituency','id');
      
      return view('words.edit', compact('word', 'districts', 'constituents'));
      
    }
    
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Word $id
	  * @return Response
	  */
    public function update($id, WordRequest $request) {
    
      $word = Word::findOrFail($id);
      
      $word->update($request->all());
      
      flash('Word updated ')->success();
      
      return redirect('words');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Word $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $word = Word::find($id);
      
      $word->delete();
      
      flash('Word deleted ')->success();
      
      return redirect('words');
      
    }

}
