<?php
// ke thua - chong ke thua - override - chong override ...

// keyword : final : chong ke thua
class Person 
{
	public $name = 'Test';
	public $age = 20;

	private $money = 10000;
	protected $address = 'Ha Noi';

	// cam override : final
	final public function getName()
	{
		return $this->name;
	}
}

// ke thua lop Person
class Student extends Person
{
	public function getAddress()
	{
		return $this->address;
	}

	// public function getName()
	// {
	// 	//override
	// 	return $this->age;
	// }

	public function Test()
	{
		// cho nay getName cua cha hay con
		//return $this->getName();
		// goi phuong thuc tu lop cha
		return parent::getName();
	}
}

$st = new Student;
$myName = $st->name;
echo $myName;
echo "<br/>";
// $money = $st->money; // sai : vi la private
// echo $money;
// $add = $st->address; // sai : vi la protected
// echo $add;
$add = $st->getAddress();
echo $add;

echo "<br/>";
$name = $st->getName();
echo $name;

