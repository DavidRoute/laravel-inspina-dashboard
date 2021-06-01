<?php

namespace App\Filters;

class UserFilter extends Filter
{
	/**
	* Register filter properties
	*/
	protected $filters = [
		'keywords'
	];

	public function keywords($value)
	{
		$this->builder->where(function ($query) use ($value) 
		{
			$query->where('name', 'LIKE', "%{$value}%")
				  ->orWhere('email', 'LIKE', "%{$value}%");
		});
	}

}