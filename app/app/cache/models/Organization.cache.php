<?php
return array("#tableName"=>"organization","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","name"=>"name","domain"=>"domain","aliases"=>"aliases","groupes"=>"groupes","organizationsettingss"=>"organizationsettingss","users"=>"users"),"#fieldTypes"=>array("id"=>"int(11)","name"=>"varchar(100)","domain"=>"varchar(255)","aliases"=>"text","groupes"=>"mixed","organizationsettingss"=>"mixed","users"=>"mixed"),"#nullable"=>array("aliases"),"#notSerializable"=>array("groupes","organizationsettingss","users"),"#transformers"=>array(),"#accessors"=>array("id"=>"setId","name"=>"setName","domain"=>"setDomain","aliases"=>"setAliases","groupes"=>"setGroupes","organizationsettingss"=>"setOrganizationsettingss","users"=>"setUsers"),"#oneToMany"=>array("groupes"=>array("mappedBy"=>"organization","className"=>"models\\Groupe"),"organizationsettingss"=>array("mappedBy"=>"organization","className"=>"models\\Organizationsettings"),"users"=>array("mappedBy"=>"organization","className"=>"models\\User")));
