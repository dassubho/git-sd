<?php
	class MyClass {
	   private $car = "skoda";
	   
	   
	   function myPublicFunction() {
	      return("I'm visible!");
	   }
	   
	   private function myPrivateFunction() {
	      return("I'm  not visible outside!");
	   }
	}

	$example = new MyClass;
	echo $example->myPrivateFunction();
?>