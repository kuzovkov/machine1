<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\Mydbdiffo_m13e' => 
  array (
  ),
),
  'models\\Mydbdiffo_m13e' => array(
    array('#name' => 'table', '#type' => 'Ubiquity\\annotations\\TableAnnotation', 'mydbdiffo_m13e')
  ),
  'models\\Mydbdiffo_m13e::$set_id' => array(
    array('#name' => 'id', '#type' => 'Ubiquity\\annotations\\IdAnnotation'),
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"set_id","nullable"=>false,"dbType"=>"bigint(20)"),
    array('#name' => 'validator', '#type' => 'Ubiquity\\annotations\\ValidatorAnnotation', "id","constraints"=>array("autoinc"=>true))
  ),
  'models\\Mydbdiffo_m13e::$app_name' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"app_name","nullable"=>false,"dbType"=>"varchar(50)"),
    array('#name' => 'validator', '#type' => 'Ubiquity\\annotations\\ValidatorAnnotation', "length","constraints"=>array("max"=>50,"notNull"=>true))
  ),
  'models\\Mydbdiffo_m13e::$set_name' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"set_name","nullable"=>false,"dbType"=>"varchar(50)"),
    array('#name' => 'validator', '#type' => 'Ubiquity\\annotations\\ValidatorAnnotation', "length","constraints"=>array("max"=>50,"notNull"=>true))
  ),
  'models\\Mydbdiffo_m13e::$set_type' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"set_type","nullable"=>false,"dbType"=>"varchar(20)"),
    array('#name' => 'validator', '#type' => 'Ubiquity\\annotations\\ValidatorAnnotation', "length","constraints"=>array("max"=>20,"notNull"=>true))
  ),
  'models\\Mydbdiffo_m13e::$set_value' => array(
    array('#name' => 'column', '#type' => 'Ubiquity\\annotations\\ColumnAnnotation', "name"=>"set_value","nullable"=>true,"dbType"=>"longtext")
  ),
);

