<?php
namespace App\Model;

use \PDO;
use App\Core\Queries\Builder;
use App\Model\Magazine;

/**
* 
*/
class Qbuilder extends Builder
{
	/**
	 * same as get() but with a FETCH_CLASS
	 * @param  string 	 	$class 		
	 * @return instance 
	 */
	public function getClass($class)
	{
        return $this->getAllClass($class);
	}

	/**
	 * * @param  string 	 	$class
	 * @return instance
	 */
	protected function getAllClass($class)
	{
		$stmt = $this->exec();
		$this->resetQuery();
		if ($stmt->errorCode() === '00000') {

        	return $stmt->fetchAll(PDO::FETCH_CLASS, $class); 		
    	}
		die($stmt->errorInfo()[2]);
	}

	/**
	 * Select * if !isset args
	 * @return instance  		$this 
	 */
	public function select()
	{
		if (!empty(func_get_args())) {
			$this->req_type = "SELECT";
			if (!empty($this->first_args)) {
				$this->first_args = sprintf('%s, ', $this->first_args);
			}
			$this->first_args = sprintf('%s%s', $this->first_args, $this->setArgs(func_get_args()));

			return $this;
		} else {
			$this->req_type = "SELECT *";

			return $this;
		}
	}

	public function where($value, $col = 'id', $operator = '=')
	{
		$this->where = sprintf('%s%s:%s', $col, $operator, $col);
		$this->tags[sprintf(":%s", $col)] = $value;

		return $this;
	}
}















