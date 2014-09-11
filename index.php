<?php

  $obj = new example;
  $obj->name = 'steve';
  print_r($obj);
  $obj2 = new example('jeff');
  
  class example{
    public $name;
      function__construct(){
        $this->name = $name;
        echo 'Hello World...' . $this->name;
	}
	function printHellowWorld(){
	echo 'Hello World...' . $this->name;
	}
    }
?>
