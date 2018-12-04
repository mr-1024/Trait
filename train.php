<?php
trait Bt
{
	public function aTest()
	{
		echo 'hello ';
	}

	public function bTest()
	{
		echo 'word!';
	}

	public function ab()
	{
		$this->aTest();
		$this->bTest();
	}
}

class test{
	use Bt;
}

$test = new test();
$test->ab();