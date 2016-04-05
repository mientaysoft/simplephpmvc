<?php

namespace App\Controllers;

use App\Core\View;

class Welcome {

	public function index() {

		$data = [
			'title' => 'Trang Chủ'
		];

		$view = View::make('layouts::default', $data);

		$view->nest('body', 'welcome/index', $data);


		echo $view;

	}

}