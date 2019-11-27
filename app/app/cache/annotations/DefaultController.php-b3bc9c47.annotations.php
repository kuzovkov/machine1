<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\DefaultController' => 
  array (
  ),
),
  'controllers\\DefaultController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/hello","automated"=>true)
  ),
  'controllers\\DefaultController::sayHello' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "to/{name}/")
  ),
);

