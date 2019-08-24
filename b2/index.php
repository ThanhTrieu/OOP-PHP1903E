<?php
namespace App\DemoNameSpace;

class Test 
{
	public function __construct($myage)
	{
		echo "my age : {$myage}";
		echo "<br/>";
	}

	protected $name = 'NVA';

	public function demo()
	{
		return $this->name . ' --- ' . __CLASS__;
	}
}