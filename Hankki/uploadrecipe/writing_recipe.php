<?php
	class receipe{
		private $food_name;
		private $receipe_step;
		
		function __construct($food_name, $receipe_step){
			$this->food_name = $food_name;
			$this->receipe_step = $receipe_step;
		}
		
		function view_info(){
			echo $food_name, $receipe_step;
		}
	}
	
	$total_step = array();
	
	for($i = 0; $i < $stepcount; $i++){
	
	}
	$name = $_POST["name"];
	$step1 = $_POST["email"];
	
	echo $name,"님의 이메일 주소는 ",$email,"입니다.";		
?>