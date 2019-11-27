<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\Product' => 
  array (
  ),
),
  'models\\Product' => array(
    array('#name' => 'table', '#type' => 'Ubiquity\\annotations\\TableAnnotation', 'product')
  ),
  'models\\Product::$id' => array(
    array('#name' => 'id', '#type' => 'Ubiquity\\annotations\\IdAnnotation'),
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"id","nullable"=>false,"dbType"=>"int(10) unsigned"),
    array('#name' => 'validator', '#type' => 'Ubiquity\\annotations\\ValidatorAnnotation', "id","constraints"=>array("autoinc"=>true))
  ),
  'models\\Product::$title' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"title","nullable"=>true,"dbType"=>"varchar(255)"),
    array('#name' => 'validator', '#type' => 'Ubiquity\\annotations\\ValidatorAnnotation', "length","constraints"=>array("max"=>255))
  ),
  'models\\Product::$description' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"description","nullable"=>true,"dbType"=>"text")
  ),
  'models\\Product::$price' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"price","nullable"=>true,"dbType"=>"float")
  ),
  'models\\Product::$category' => array(
    array('#name' => 'manyToOne', '#type' => 'Ubiquity\\annotations\\ManyToOneAnnotation'),
    array('#name' => 'joinColumn', '#type' => 'Ubiquity\\annotations\\JoinColumnAnnotation', "className"=>"models\\Category","name"=>"category_id","nullable"=>false)
  ),
);

