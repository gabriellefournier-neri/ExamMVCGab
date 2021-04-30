<?php

class HomeController extends Controller
{
	public function hello() {
		$this->render('home/hello.html.php');

	}
}