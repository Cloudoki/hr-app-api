<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cloudoki\Guardian\Guardian;
use App\Models\Opportunity;

class OpportunityController extends BaseController
{
    const type = 'opportunity';
    
    /**
     *  Validation Rules
     *  Based on Laravel Validation
     */
    protected static $getRules =
    [
        'id'    =>  'required|integer'
    ];

    protected static $updateRules =
    [
		"status" => "",
		"location" => "",
		"title" => "",
        "description" => "",
        "requirements" => "",
        "skills" => "",
        "nice_to_have" => "",
        "perks" => "",
        "created_by" => ""
    ];

    protected static $postRules =
    [
        "status" => "required",
		"location" => "required",
		"title" => "required",
        "description" => "required",
        "requirements" => "required",
        "skills" => "required",
        "nice_to_have" => "required",
        "perks" => "required",
        "created_by" => "required"
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        	# Validate
		Guardian::check ();
		
        $payload = $this->validation ( $id? ['id'=> $id]: [], $id? self::$getRules: []);
		
        $list = Opportunity::orderBy('id')->get();
		
		# return all (account) users
		return response()->json ($list->schema($payload->display));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $this->validation ([], self::$postRules);

		# Validate
		Guardian::check ($id? (int) $id: null);
		
		# Save input
		$opportunity = new Opportunity;
		$opportunity->schemaUpdate((array) $payload);
		

		# Return Account
		return response()->json($opportunity->schema($payload->display));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        # resources
		$payload = $this->validation (['id'=> $id], self::$getRules);

		# Validate
		Guardian::check ();
		
		$opportunity =	Opportunity::find($payload->id);
			
		if (!$vacancy)
			
			throw new ModelNotFoundException();
		

		# Return Account
		return response()->json($opportunity->schema ($payload->display));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        # resources
		$payload = $this->validation ([], self::$updateRules);

		# Validate
		Guardian::check ();
		
		$opportunity = Opportunity::find($id);
			
		if (!$vacancy)
			
			throw new ModelNotFoundException();
		
		# Update account
		$opportunity->schemaUpdate ((array) $payload);
		
		# Return Account
		return response()->json($opportunity->schema ($payload->display));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
