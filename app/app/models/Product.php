<?php
namespace models;
/**
 * @table('product')
*/
class Product{
	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(10) unsigned")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

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
	 * @column("name"=>"price","nullable"=>true,"dbType"=>"float")
	**/
	private $price;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Category","name"=>"category_id","nullable"=>false)
	**/
	private $category;

	 public function getId(){
		return $this->id;
	}

	 public function setId($id){
		$this->id=$id;
	}

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

	 public function getPrice(){
		return $this->price;
	}

	 public function setPrice($price){
		$this->price=$price;
	}

	 public function getCategory(){
		return $this->category;
	}

	 public function setCategory($category){
		$this->category=$category;
	}

	 public function __toString(){
		return $this->id;
	}

}