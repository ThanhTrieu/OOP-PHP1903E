<?php 

namespace TestNameSpace;

require 'index.php';

// vi file index2 va index dang co namespace nen can su dung cu phap - de truy cap vao dc class
use App\DemoNameSpace\Test as MyTest;

class MyNameSpace extends MyTest
{
	public function __construct($age)
	{
		parent::__construct($age);
		// trieu goi phuong thuc __construct cua lop cha
	}

	public function getNameSpace()
	{
		return __NAMESPACE__;
	}
}

$test = new MyNameSpace(20);
// 20 : tham so thuc truyen vao __construct
echo $test->demo();
echo "<br/>";
echo $test->getNameSpace();