<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BaseModel;

class Opportunity extends BaseModel
{
    use SoftDeletes;
	
	protected $table = 'opportunities';

		/**
	 * The model type.
	 *
	 * @const string
	 */
	const type = 'opportunity';

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
	public function getStatus ()
	{
		return $this->status;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setStatus ($status)
	{
		$this->status = $status;
		
		return $this;
	}

    /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getLocation ()
	{
		return $this->location;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setLocation ($location)
	{
		$this->location = $location;
		
		return $this;
	}

     /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getTitle ()
	{
		return $this->title;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setTitle ($title)
	{
		$this->title = $title;
		
		return $this;
	}

    /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getDescription ()
	{
		return $this->description;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setDescription ($description)
	{
		$this->description = $description;
		
		return $this;
	}

     /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getRequirements ()
	{
		return $this->requirements;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setRequirements ($requirements)
	{
		$this->requirements = $requirements;
		
		return $this;
	}

       /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getSkills ()
	{
		return $this->skills;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setSkills ($skills)
	{
		$this->skills = $skills;
		
		return $this;
	}

      /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getNiceToHave ()
	{
		return $this->nice_to_have;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setNiceToHave ($nice_to_have)
	{
		$this->nice_to_have = $nice_to_have;
		
		return $this;
	}

        /**
	 * Get user first name
	 *
	 * @return	string
	 */
	public function getPerks ()
	{
		return $this->perks;
	}

	/**
	 * Set user name
	 *
	 * @param	string	$firstname
	 */
	public function setPerks ($perks)
	{
		$this->perks = $perks;
		
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

	 /**
	 * Get created at
	 *
	 * @return	date
	 */
	public function getCreatedAt ()
	{
		return $this->created_at;
	}

	 /**
	 * Get updated at
	 *
	 * @return	date
	 */
	public function getUpdatedAt ()
	{
		return $this->updated_at;
	}
}
