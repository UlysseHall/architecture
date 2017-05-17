<?php
namespace App\Model;

class News
{
    private $id;
    private $date;
    private $architect;
    private $departement;
    private $city;
    private $type;
    private $title;
    private $description;
    private $infos;
    private $partners;
    private $img;
    
    public function setDate($date)
	{
		$this->date = $date;
	}
    
    public function setArchitect($architect)
	{
		$this->architect = $architect;
	}
    
    public function setDepartement($departement)
	{
		$this->departement = $departement;
	}
    
    public function setCity($city)
	{
		$this->city = $city;
	}
    
    public function setType($type)
	{
		$this->type = $type;
	}
    
    public function setTitle($title)
	{
		$this->title = $title;
	}
    
    public function setDescription($description)
	{
		$this->description = $description;
	}
    
    public function setInfos($infos)
	{
		$this->infos = $infos;
	}
    
    public function setPartners($partners)
	{
		$this->partners = $partners;
	}
    
    public function setImg($img)
	{
		$this->img = $img;
	}
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getDate()
	{
		return $this->date;
	}
    
    public function getArchitect()
	{
		return $this->architect;
	}
    
    public function getDepartement()
	{
		return $this->departement;
	}
    
    public function getCity()
	{
		return $this->city;
	}
    
    public function getType()
	{
		return $this->type;
	}
    
    public function getTitle()
	{
		return $this->title;
	}
    
    public function getDescription()
	{
		return $this->description;
	}
    
    public function getInfos()
	{
		return $this->infos;
	}
    
    public function getPartners()
	{
		return $this->partners;
	}
    
    public function getImg()
	{
		return $this->img;
	}
}