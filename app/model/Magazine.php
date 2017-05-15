<?php
namespace App\Model;

class Magazine
{
	private $id;
	private $number;
	private $img;
	private $pdf;
	private $region;
	private $year;

	/**
	 * Get all infos about magazine in array to update/insert
	 * @return array 	 	all parameters
	 */
	public function getAll()
	{
		$all['number'] = $this->number;
		$all['img'] = $this->img;
		$all['pdf'] = $this->pdf;
		$all['region'] = $this->region;
		$all['year'] = $this->year;

		return $all;
	}

	// SETTERS
	public function setId()
	{
		return $this->id;
	}

	public function setNumber()
	{
		return $this->number;
	}

	public function setImg()
	{
		return $this->img;
	}

	public function setPdf()
	{
		return $this->pdf;
	}

	public function setRegion()
	{
		return $this->region;
	}

	public function setYear()
	{
		return $this->year;
	}

	// GETTERS

	public function getId()
	{
		return $this->id;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function getImg()
	{
		return $this->img;
	}

	public function getPdf()
	{
		return $this->pdf;
	}

	public function getRegion()
	{
		return $this->region;
	}

	public function getYear()
	{
		return $this->year;
	}
}

