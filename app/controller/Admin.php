<?php
namespace App\Controller;
use App\Model\Qbuilder;

class Admin
{
	public function adminAction()
	{
		# Code goes here ...
	}

	public function admin_updateAction()
	{
		$builder = new Qbuilder('magazine');
		$magazine = $builder->select()->where($_GET['id'])->getClass('App\Model\Magazine');
		$magazine = $magazine[0];

		return ['page' => 'admin/update.php', 'cont' => ['magazine' => $magazine]];
	}

	public function admin_singleAction()
	{
		
	}
}