<?php
namespace models;
/**
 * @table('category')
*/
class Category{
	/**
	 * @column("name"=>"title","nullable"=>true,"dbType"=>"varchar(255)")
	 * @validator("length","constraints"=>array("max"=>255))
	**/
	private $title;

	/**
	 * @column("name"=>"description","nullable"=>true,"dbType"=>"text")
	**/
	private $description;

	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(10) unsigned")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

	/**
	 * @oneToMany("mappedBy"=>"category","className"=>"models\\Product")
	**/
	private $products;

	 public function getTitle(){
		return $this->title;
	}

	 public function setTitle($title){
		$this->title=$title;
	}

	 public function getDescription(){
		return $this->description;
	}

	 public function setDescription($description){
		$this->description=$description;
	}

	 public function getId(){
		return $this->id;
	}

	 public function setId($id){
		$this->id=$id;
	}

	 public function getProducts(){
		return $this->products;
	}

	 public function setProducts($products){
		$this->products=$products;
	}

	 public function __toString(){
		return $this->id;
	}

}