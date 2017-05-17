<?php
namespace App\Controller;

use App\Model\Magazine;
use App\Model\Qbuilder;

class Admin
{
	/**
	 * get all the magazine in an array
	 * @return array   			[page to reach][fetch]
	 */
	public function admin_homeAction()
	{
		$builder = new Qbuilder('magazine');
		$list = $builder->select('id', 'number')->order('id', 'DESC')->getClass('\App\Model\Magazine');

		return ['page' => 'admin/home.php', 'cont' => ['list' => $list]];
	}

	public function admin_updateAction()
	{
		$builder = new Qbuilder('magazine');
		$magazine = $builder->select()->where($_GET['id'])->getClass('App\Model\Magazine');
		$magazine = $magazine[0];

		return ['page' => 'admin/update.php', 'cont' => ['magazine' => $magazine]];
	}

	private function delete()
	{
		

	}

	public function admin_singleAction()
	{
		if (isset($_GET['id'])) {
			if (isset($_GET['delete'])) {

			} else {

				return ['page' => 'admin/single.php', 'cont' => ['magazine' => $this->single()]];
			}
		} else {

			return header('Location: index.php?action=admin_home');
		}
	}

	public function admin_formAction()
	{
		if (isset($_GET['id'])) {
			if (isset($_GET['update'])) {

				return $this->update($_GET['id']);
			} elseif (isset($_GET['add'])) {
	
				return $this->add();
			}
		} 

		return header('Location: index.php?action=admin_home');
	}

	/**
	 * Set an instance of Magazine to create one in db
	 * @return Location 		single|home
	 */
	private function add()
	{
		if (isset($_POST['add'])) {
			$magazine = new Magazine();
			$builder = new Qbuilder('magazine');
			$magazine->setNumber($_POST['number']);
			$magazine->setImg($_POST['img']);
			$magazine->setPdf($_POST['pdf']);
			$magazine->setRegion($_POST['region']);
			$magazine->setYear($_POST['year']);
			if (isset($_POST['second_region'])) {
				$magazine->setSecond_region($_POST['second_region']);
			}

			$builder->insert($magazine->getAll())->get();

			return header('Location: index.php?action=admin_single&id=last');
		}

		return header('Location: index.php?action=admin_home');
	}

	private function single()
	{
		if ($_GET['id'] === 'last') {
			$builder = new Qbuilder('magazine');
			$last_mag = $builder->getLast()->getClass('App\Model\Magazine');
			$last_mag = $last_mag[0];

			return $last_mag;
		}
	}
}