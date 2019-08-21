<?php

// dinh nghia class trong oop php
class Student 
{
	// dinh nghia thuoc tinh
	// mieu ta dac diem -tinh chat cua doi tuong
	public $name = 'NVA';
	protected $money = 10000;
	private $single = 1;
	const PI = 3.14;
	public static $email = 'test@gmail.com';
	private static $add = 'Ha Noi';

	// dinh nghia phuong thuc
	// mieu ta hanh dong cua doi tuong
	public function playingGame($game = 'LOL')
	{
		// $this : contro noi tai cua class
		return $this->name . ' play ' . $game;
	}

	protected function tronTietBoGio()
	{
		return $this->money  . ' tien phat';
	}

	function diChoiVoiBanGai()
	{
		return " Len Bo Ho vao luc " . self::PI;
	}

	public function getEmail()
	{
		//$add = $this->getAddress();
		$add = self::getAddress();
		return self::$email . '---' . $add;
		//return Student::$email;
	}

	public static function getAddress()
	{
		$obj = new Student;
		// trong phuong thuc static ko ho tro con tro this
		//$tronHoc = (new Student)->tronTietBoGio();
		$tronHoc = $obj->tronTietBoGio();
		return self::$add . '----' . $tronHoc;
	}

	public static function Demo()
	{
		return self::getAddress();
	}

}

// dinh nghia object
$stCNTT = new Student;
$stCoKhi = new Student;

$add = Student::getAddress();
echo $add;
echo "<br/>";

$demo = Student::Demo();
echo $demo;
echo "<br/>";

// cach truy cap vao 1 thuoc tinh trong class
// $mySingle = $stCNTT->single; // loi vi no la private
// echo $mySingle;
$myName = $stCoKhi->name;
echo $myName;
echo "<br/>";
// $myMoney = $stCNTT->money; // sai vi la protected
// echo $myMoney;

// truy cap vao phuong thuc cua class
$play = $stCNTT->playingGame('AOE');
echo $play;
echo "<br/>";

// truy cap thuoc tinh static
$myEmail = Student::$email;
echo $myEmail;


