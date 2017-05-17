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

	public function admin_singleAction()
	{
		if (isset($_GET['id'])) {
			if (isset($_POST['delete']) && $_POST['delete']) {

				return $this->delete();
			} else {

				return $this->single();
			}
		}

		return header('Location: index.php?action=admin_home');
	}

	public function admin_formAction()
	{
		if (isset($_GET['id'])) {
			if ($_GET['update']) {

				return $this->update($_GET['id']);
			} elseif ($_GET['add']) {
	
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

	/**
	 * show one article from $_GET['id']
	 * @return array  		[page],[instance(magazine)]
	 */	
	private function single()
	{
		$builder = new Qbuilder('magazine');
		if ($_GET['id'] === 'last') {
			$last_mag = $builder->getLast()->getClass('App\Model\Magazine');
		} else {
			$last_mag = $builder->select()->where($_GET['id'])->getClass('App\Model\Magazine');
		}
		$last_mag = $last_mag[0];

		return ['page' => 'admin/single.php', 'cont' => ['magazine' => $last_mag]];
	}

	/**
	 * @return header   		back to admin home
	 */
	private function delete()
	{
		$builder = new Qbuilder('magazine');
		$builder->delete($_GET['id'])->get();

		return header('Location: index.php?action=admin_home');
	}

	/**
	 * @return header   		back to single with updated datas
	 */
	private function update()
	{
		$builder = new Qbuilder('magazine');
		if (empty($_POST)) {
			$magazine = $builder->select()->where($_GET['id'])->getClass('App\Model\Magazine');
			$magazine = $magazine[0];

			return ['page' => 'admin/form.php', 'cont' => ['magazine' => $magazine]];
		} else {
			$magazine = new Magazine();
			$magazine->setNumber($_POST['number']);
			$magazine->setImg($_POST['img']);
			$magazine->setPdf($_POST['pdf']);
			$magazine->setRegion($_POST['region']);
			$magazine->setYear($_POST['year']);
			
			if($builder->update($magazine->getAll())->get()) {

				return header('Location: index.php?action=admin_single&id='.$_GET['id']);
			}

			die('ERROOR');
		}
	}


	
}