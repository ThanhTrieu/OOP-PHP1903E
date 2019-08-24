<?php
// interface
interface A 
{
	// khong duoc phep dinh nghia thuoc tinh
	// public $name = 'NVA'; // sai
	// chi duoc phep khai bao phuong thuc va la phuong thuc rong
	public function Test();
	public function Demo();

	// protected function demo(); // sai
	// pivate function check(); // sai
	// chi chap nhan public
}
// $a = new A; // sai
// interface ko the khoi tao doi tuong

// 2 interface ke thua nhau van dung extends
interface B extends A 
{
	public function Check();
}

// class ke thua interface thi dung implements
class C implements B 
{
	//class C phai override lai toan bo cac phuong thuc cua interface
	public function Test()
	{

	}

	public function Demo()
	{

	}

	public function Check()
	{
		return "Test";
	}
}
$c = new C;
echo $c->Check();





