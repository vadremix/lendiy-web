<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * This class is to set up information about the project, such
 * as its name
 */

class Project_info {
	public $project = array(
		'name' => 'Lendiy',
		'base_path' => '/'
	);

	/*
	 * This method is used to add project information not
	 * already defined. Arguments are expected to be arrays
	 */
	public function append()
	{
		foreach(func_get_args() as $value)
		{
			if(is_array($value))
			{
				$this->project = array_merge($this->project, $value);
			}
			else
			{
				trigger_error("Non-array given as argument", E_USER_WARNING);
			}
		}
	}
}
