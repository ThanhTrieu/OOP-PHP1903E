<?php

abstract class A 
{
	// van duoc khai bao thuoc tinh binh thuong
	public $age = 20;
	protected $name = 'NVA';
	private $money = 2000;

	// khai bao phuong thuc
	// 1 - phuong thuc co tu khoa abstract thi phai la phuong thuc rong va chi chap nhan protected hoac public khong private
	abstract public function demo();
	abstract protected function test();

	// 2 - nhu cac phuong thuc binh thuong khac
	public function check()
	{
		return $this->money;
	}
}

// vi la abstract nen khong the khoi tao doi tuong
// $a = new A; // sai
// echo $a->age; // sai

// 2 abstract class ke thua nhau
abstract class B extends A 
{
	// co the khai bao thuoc tinh
	abstract public function example();
	// dinh nghia them cac phuong thuc khac
}

class C extends B
{
	// bat buoc override lai cac phuong thuc abstract - con cac phuong thuc khac ko bat buoc
	public function demo()
	{

	}

	public function test()
	{
		return $this->name;
	}

	public function example()
	{

	}
}
$c = new C;
echo $c->test();


