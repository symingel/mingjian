<?php


phpinfo();

$h=1;
$ming=date('Y年 m月 d日 H:i:s',strtotime("'+$h hours'"));
echo $ming;

class Test
{
	protected $init;
	public function __construct($data){
		$this->init=$data;

	}

	public function show(){
		$this->init->data();

		echo 'hello world version 1.0';
	}
}


// $test=new Test(new Bar);
// $test->show();

