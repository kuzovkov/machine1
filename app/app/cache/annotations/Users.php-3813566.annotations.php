<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'UsersDatas' => 'controllers\\crud\\datas\\UsersDatas',
  'CRUDDatas' => 'Ubiquity\\controllers\\crud\\CRUDDatas',
  'UsersViewer' => 'controllers\\crud\\viewers\\UsersViewer',
  'ModelViewer' => 'Ubiquity\\controllers\\crud\\viewers\\ModelViewer',
  'UsersEvents' => 'controllers\\crud\\events\\UsersEvents',
  'CRUDEvents' => 'Ubiquity\\controllers\\crud\\CRUDEvents',
  'UsersFiles' => 'controllers\\crud\\files\\UsersFiles',
  'CRUDFiles' => 'Ubiquity\\controllers\\crud\\CRUDFiles',
),
  '#traitMethodOverrides' => array (
  'controllers\\Users' => 
  array (
  ),
),
  'controllers\\Users' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/admin/users/","inherited"=>true,"automated"=>true)
  ),
);

