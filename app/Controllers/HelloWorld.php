<?php

namespace App\Controllers;

use App\Core\View;

class HelloWorld {

	public function index() {
		$data = [
			"title" => "Hello World",
			"msg" => "Hello World, This is a simple PHP MVC"
		];

		$view = View::make("helloworld\home", $data);

		echo $view;
	}

}
