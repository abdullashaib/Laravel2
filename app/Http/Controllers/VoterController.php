<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoterRequest;
use App\User;
use App\Voter;
use App\Polling;
use App\Constituent;
use App\District;
use App\PollingShehia;
use App\Repositories\Voters;

class VoterController extends Controller
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
	  * Display a listing of voters based on user logged in.
	  *
	  * @return Response Array
	  */
    public function index() {
     
      $user = User::findOrFail(auth()->id());
      
      $pollings = Polling::findOrFail($user->constituency_id);
      
      //$pollings = $voters->all();
      
      return view('voters.index', compact('pollings'));
      
    }
    
    
    /**
	  * Display a listing of voters based on polling station.
	  *
	  * @return Response Array
	  */
    public function votersList($id) {
      
      $user = User::findOrFail(auth()->id());
      
      $voters = Voter::constituent($user->constituency_id)->polling($id)->sortcolumn()->get();
      
      return view('voters.list', compact('voters'));
      
    }
    
    
    /**
	  * Display a listing of voters based on word.
	  *
	  * @return Response Array
	  */
    public function votersListWord($id) {
      
      $user = User::findOrFail(auth()->id());
      
      $words = PollingShehia::where('word_id', $id)->pluck('pollingstation_id'); 
      
      $voters = Voter::whereIn('pollingstation_id', function($query) use($id) {
        $query->from('pollingstation_shehia')
            ->where('word_id', $id)
            ->select('pollingstation_id');
    })->get();
    
    //dd($voters);
     
      return view('voters.votersWordList', compact('voters'));
      
    }
    
    
    
    /**
	  * Show the form for creating a new resource.
	  *
	  * @return Response
	  */
    public function create() {
    
      $user = User::findOrFail(auth()->id());
        
      $pollings = Polling::where('constituency_id', $user->constituency_id)->pluck('name','id');
      
      $constituents = Constituent::pluck('constituency','id');
      
      $constituents->all();
      
      return view('voters.create', compact('pollings', 'constituents'));
      
    }
    
    /**
	  * Store a newly created resource in storage.
	  *
	  * @return Response
	  */
    public function store( VoterRequest $request) {
      
      Voter::create([
        'firstname' => request('firstname'), 
        'middlename' => request('middlename'),
        'lastname' => request('lastname'), 
        'datebirth' => request('datebirth'),
        'gender' => request('gender'), 
        'residentialaddress' => request('residentialaddress'),
        'pollingstation_id' => request('pollingstation_id'), 
        'residentialconstituency_id' => request('residentialconstituency_id'),
        'votingconstituency_id' => request('votingconstituency_id'), 
        'voterIDnumber' => request('voterIDnumber'),
        'lifestatus' => request('lifestatus'),
        'user_id' => auth()->id()
      ]);
      
      flash('Voter added successful')->success();
      
      return redirect('voters');
      
    }
    
    
    /**
	  * Display the specified resource.
	  *
	  * @param  \App\Voter $voter
	  * @return Response
	  */
    public function show( Voter $voter) {
     
      return view('voters.show', compact('voter'));
      
    }
    
    /**
	  * Show the form for editing the specified resource.
	  *
	  * @param  \App\Voter $id
	  * @return Response
	  */
    public function edit($id) {
     
      $user = User::findOrFail(auth()->id());
      
      $voter = Voter::findOrFail($id);
      
      $pollings = Polling::where('constituency_id', $user->constituency_id)->pluck('name','id');
      
      $constituents = Constituent::pluck('constituency','id');
      
      $constituents->all();
      
      return view('voters.edit', compact('voter', 'districts', 'pollings', 'constituents'));
      
    }
    
    
    /**
	  * Update the specified resource in storage.
	  *
	  * @param  \App\Voter $id
	  * @return Response
	  */
    public function update($id, VoterRequest $request) {
    
      $voter = Voter::findOrFail($id);
      
      $voter->update($request->all());
      
      flash('Voter updated ')->success();
      
      return redirect('voters');
    
    }
    
    /**
	  * Remove the specified resource from storage.
	  *
	  * @param  \App\Voter $id
	  * @return Response
	  */
    public function destroy( $id ) {
     
      $voter = Voter::find($id);
      
      $voter->delete();
      
      flash('Voter deleted ')->success();
      
      return redirect('voters');
      
    }

}
