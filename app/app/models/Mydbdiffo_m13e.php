<?php
namespace models;
/**
 * @table('mydbdiffo_m13e')
*/
class Mydbdiffo_m13e{
	/**
	 * @id
	 * @column("name"=>"set_id","nullable"=>false,"dbType"=>"bigint(20)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $set_id;

	/**
	 * @column("name"=>"app_name","nullable"=>false,"dbType"=>"varchar(50)")
	 * @validator("length","constraints"=>array("max"=>50,"notNull"=>true))
	**/
	private $app_name;

	/**
	 * @column("name"=>"set_name","nullable"=>false,"dbType"=>"varchar(50)")
	 * @validator("length","constraints"=>array("max"=>50,"notNull"=>true))
	**/
	private $set_name;

	/**
	 * @column("name"=>"set_type","nullable"=>false,"dbType"=>"varchar(20)")
	 * @validator("length","constraints"=>array("max"=>20,"notNull"=>true))
	**/
	private $set_type;

	/**
	 * @column("name"=>"set_value","nullable"=>true,"dbType"=>"longtext")
	**/
	private $set_value;

	 public function getSet_id(){
		return $this->set_id;
	}

	 public function setSet_id($set_id){
		$this->set_id=$set_id;
	}

	 public function getApp_name(){
		return $this->app_name;
	}

	 public function setApp_name($app_name){
		$this->app_name=$app_name;
	}

	 public function getSet_name(){
		return $this->set_name;
	}

	 public function setSet_name($set_name){
		$this->set_name=$set_name;
	}

	 public function getSet_type(){
		return $this->set_type;
	}

	 public function setSet_type($set_type){
		$this->set_type=$set_type;
	}

	 public function getSet_value(){
		return $this->set_value;
	}

	 public function setSet_value($set_value){
		$this->set_value=$set_value;
	}

	 public function __toString(){
		return $this->set_type;
	}

}