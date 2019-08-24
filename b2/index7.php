<?php
namespace App\Controller;

require 'Bootstrap.php';
use App\Bootstrap;
new Bootstrap;


use Controller\Home;
use model\Home_model;

// require 'index.php';
// require 'ex.php';
// require 'ex2.php';
// use  App\DemoNameSpace\Test;

class A {

	public function myTest()
	{

	}
}


$home = new Home;
echo $home->index();