<?php
// cac phuong thuc magic oop
class Cat 
{
	// construct method
	public function __construct()
	{
		// phuong thuc nay se tu dong chay dau tien khi khoi tao object cho class
		// __FUNCTION__ : hang so lay ra ten phuong thuc dang dung
		echo "This is " . __FUNCTION__; // this is __construct
		echo "<br/>";
	}

	// destruct method
	public function __destruct()
	{
		// phuong thuc nay se tu dong chay cuoi cung khi khoi tao doi tuong cho class
		echo "<br/>";
		// __CLASS__: hang so lay ra ten class dang hoat dong
		echo "This is " . __FUNCTION__ . ' --- ' . __CLASS__;
	}

	public function fisrtRun()
	{
		echo " This is " . __FUNCTION__;
	}

	public function __call($request, $respone)
	{
		echo "Ban vua truy cap vao thuong thuc ko ton tai trong class";
		echo "<br>";
		// phuong thuc nay se auto run khi truy cap vao 1 phuong thuc khong ton tai trong class
		// danh cho cac phuong thuc khong phai la static
	}

	public static function __callStatic($req, $res)
	{
		echo "Ban vua truy cap vao thuong thuc static ko ton tai trong class";
		echo "<br>";
		// phuong thuc nay se auto run khi truy cap vao 1 phuong thuc static khong ton tai trong class
		// danh cho cac phuong thuc la static
	}

	public function __get($key)
	{
		echo "Ban vua truy cap vao thuoc tinh {$key} khong ton tai trong class";
		echo "<br/>";
		// no se auto run khi truy cap vao 1 thuoc tinh ko ton tai trong class
	}

	public function __set($key, $value)
	{
		// no se auto run khi ban truy cap va gan gia tri cho 1 thuoc tinh khong ton tai trong class
		echo "Ban vua truy cap vao thuoc tinh {$key} va da gan cho no gia tri {$value} nhung khong ton tai trong class";
		echo "<br/>";
	}
}

$cat = new Cat; // lap tuc phuong thuc __construct se auto run
$cat->fisrtRun();
$cat->eat(); // eat() : khong ton tai trong class
Cat::drink(); // drink() : khong ton tai trong class
$cat->food; // food la thuoc tinh ko ton tai trong class
$cat->meat = 'Dog';

