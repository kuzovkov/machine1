<?php
namespace controllers;

/**
 * Controller DefaultController
 * @route("/hello","automated"=>true)
 **/
class DefaultController extends ControllerBase{

    public function index(){
        echo 'Hello world!';
    }


	/**
	 *@route("to/{name}/")
	**/
	public function sayHello($name){
		echo sprintf('Hello %s!', $name);
	}

}
