<?php
return array(
	"siteUrl"=>"http://localhost:8007/",
	"database"=>array(
			"type"=>"mysql",
			"dbName"=>"machine1",
			"serverName"=>"db",
			"port"=>3306,
			"user"=>"user1",
			"password"=>"userp@ssw0rd",
			"options"=>array(),
			"cache"=>false
			),
	"sessionName"=>"app",
	"namespaces"=>array(),
	"templateEngine"=>"Ubiquity\\views\\engine\\Twig",
	"templateEngineOptions"=>array(
			"cache"=>false,
			"activeTheme"=>"foundation"
			),
	"test"=>false,
	"debug"=>false,
	"logger"=>function (){return new \Ubiquity\log\libraries\UMonolog("app",\Monolog\Logger::INFO);},
	"di"=>array(
			"@exec"=>array(
					"jquery"=>function ($controller){
						return \Ubiquity\core\Framework::diSemantic($controller);
					}
					)
			),
	"cache"=>array(
			"directory"=>"cache/",
			"system"=>"Ubiquity\\cache\\system\\ArrayCache",
			"params"=>array()
			),
	"mvcNS"=>array(
			"models"=>"models",
			"controllers"=>"controllers",
			"rest"=>""
			),
	"isRest"=>function (){
			return \Ubiquity\utils\http\URequest::getUrlParts()[0]==="rest";
		}
	);