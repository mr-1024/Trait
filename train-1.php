<?php
trait a
{
	public function aTest()
	{
		echo 'hello ';
	}
}


trait b 
{
	public function bTest()
	{
		echo 'word';
	}
}

trait ab
{
	use a,b;

	public $code = '!';
}

class test
{
	use ab;

	public function abTest()
	{
		echo $this->aTest().$this->bTest().$this->code;
	}
}
$test = new test();
$test->abTest();