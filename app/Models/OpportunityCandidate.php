<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BaseModel;

class OpportunityCandidate extends BaseModel
{
    use SoftDeletes;
	
	protected $table = 'opportunity_candidates';

    	/**
	 * The model type.
	 *
	 * @const string
	 */
	const type = 'opportunity_candidate';

    public function opportunity_id() {
		return $this->belongsTo('App\Models\Opportunity');
	}

    public function created_by() {
		return $this->belongsTo('App\Models\User');
	}

    /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getId ()
	{
		return $this->id;
	}

    /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getOpportunity ()
	{
		return $this->opportunity_id;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setOpportunity ($opportunity_id)
	{
		$this->opportunity_id = $opportunity_id;
		
		return $this;
	}

     /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getMessage ()
	{
		return $this->message;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setMessage ($message)
	{
		$this->message = $message;
		
		return $this;
	}

     /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getCv ()
	{
		return $this->message;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setCv ($cv)
	{
		$this->cv = $cv;
		
		return $this;
	}

    /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getCreatedBy ()
	{
		return $this->created_by;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setCreatedBy ($created_by)
	{
		$this->created_by = $created_by;
		
		return $this;
	}
}
