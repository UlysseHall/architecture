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
	private $second_region;

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
		if(isset($this->second_region)) {
			$all['second_region'] = $this->second_region;
		}

		return $all;
	}

	// SETTERS
	public function setId($id)
	{
		$this->id = $id;
	}

	public function setNumber($number)
	{
		$this->number = $number;
	}

	public function setImg($img)
	{
		$this->img = $img;
	}

	public function setPdf($pdf)
	{
		$this->pdf = $pdf;
	}

	public function setRegion($region)
	{
		$this->region = $region;
	}

	public function setYear($year)
	{
		$this->year = $year;
	}

	public function setSecond_region($second_region)
	{
		$this->second_region = $second_region;
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

	public function getSecond_region()
	{
		return $this->second_region;
	}
}

