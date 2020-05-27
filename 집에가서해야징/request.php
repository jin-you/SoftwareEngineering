<HTML>
<head>
</head>
<body>
	<?php
		class Receipe{
			private $food_name;
			private $food_ingredients;
			private $step;
			public function __construct(){
			
			}
			public function setInfo($food_name, $food_ingredients){
				$this->food_name = $food_name;
				$this->food_ingredients = $food_ingredients;
				$this->step = array();
				$i = 1;
				while($i < 10){
					$step_id = "Step".$i;
					$this->step[$i] = $_POST[$step_id];
					$i++;
					if(isset($this->step[$i]))break;
				}
				

			}

			public function showInfo(){
				echo $this->food_name."<br>";
				echo $this->food_ingredients."<br>";
				
				for($i = 1; $i < count($this->step); $i++)echo $this->step[$i]."<br>";
			}

			
		}

		$newReceipe = new Receipe();
		$newReceipe->setInfo($_POST["food_name"], $_POST["food_ingredients"]);
		$newReceipe->showInfo();
		//리다이렉션 하기전에 db에 저장하는 뭔가 session 이동 필요
		Header("Location:./writing_form.php");
		//Header("Location:./receipe_view.php");
		//나중에 레시피 뷰 사이트로 이동하도록 해야함
	?>

</body>

</HTML>