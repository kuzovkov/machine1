<?php
namespace controllers;
use controllers\crud\datas\UsersDatas;
use Ubiquity\controllers\crud\CRUDDatas;
use controllers\crud\viewers\UsersViewer;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use controllers\crud\events\UsersEvents;
use Ubiquity\controllers\crud\CRUDEvents;
use controllers\crud\files\UsersFiles;
use Ubiquity\controllers\crud\CRUDFiles;

 /**
 * CRUD Controller Users
 * @route("/admin/users/","inherited"=>true,"automated"=>true)
 **/
class Users extends \Ubiquity\controllers\crud\CRUDController{

	public function __construct(){
		parent::__construct();
		\Ubiquity\orm\DAO::start();
		$this->model="models\\User";
	}

	public function _getBaseRoute() {
		return '/admin/users/';
	}
	
	protected function getAdminData(): CRUDDatas{
		return new UsersDatas($this);
	}

	protected function getModelViewer(): ModelViewer{
		return new UsersViewer($this);
	}

	protected function getEvents(): CRUDEvents{
		return new UsersEvents($this);
	}

	protected function getFiles(): CRUDFiles{
		return new UsersFiles();
	}


}
