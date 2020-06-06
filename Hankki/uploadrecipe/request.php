<HTML>
<head>
</head>
<body>
	
	<?php
	/***********************************************************************************
	 * 주의) 모든 배열 데이터의 index는 1부터 시작하도록 해놨습니다.
	 * 
	 ***********************************************************************************/
		class Receipe{
			private $food_name;
			private $food_ingredients;
			private $food_type;
			private $step;//array data
			private $step_timer;//array data
			private $taget_dir = "uploads/";//directory to store image file
			private $thumbnail_src;
			private $step_count;
			private $price;
			private $consumed_time;
			//private $target_file = $taget_dir.basename($_FILES["fileToUpload"]["name"]);
			//$uploadcheck = 1;
			//$imageFileType = pathinfo($taget_file, PATHINFO_EXTENSION);
			
			public function __construct(){
			
			}
			
			public function setInfo($food_name, $food_ingredients, $price, $consumed_time){
				$this->food_name = $food_name;
				$this->food_ingredients = $food_ingredients;
				$this->price = $price;
				$this->consumed_time = $consumed_time;
				
				if(isset($_POST["food_type"]) && $_POST["food_type"] == true)$this->food_type = $_POST["food_type"];
				//요리 종류 필수 체크는 프론트에서 막을수도 있음.
				
				//각 레시피 단계에 해당하는 문자열을 배열로 저장
				$this->step = array();
				$i = 1;
				$real_index = 1;
				while($i < 11){
					$step_id = "Step".$i;
					
					if(isset($_POST[$step_id]) && $_POST[$step_id] == true){
						$this->step[$real_index] = $_POST[$step_id];
						$real_index++;						
					}
					$i++;
				}
				//총 몇단계 레시피 인지
				$this->step_count = count($this->step);
				
				
			}
			
			public function setTimeInfo(){
				$this->step_timer = array();
				$this->step_timer[1] = 0;//php는 배열 원소에 스칼라 값을 넣을려면 먼저 이렇게 스칼라값으로 초기화 해야만 합니다 아니면 {Warning: Cannot use a scalar value as an array} 발생
				$i = 1;
				$real_index = 1;
				while($i < 11){
						
					$name = "hour".$i;
					
					if(isset($_POST[$name]) && $_POST[$name] == true){
						$tmp = ((int)($_POST[$name]))*60*60;							
					}
					else{
						$tmp = 0;
					}
				
					
					$name = "min".$i;
					if(isset($_POST[$name]) && $_POST[$name] == true){
						$tmp += ((int)($_POST[$name]))*60;							
					}
					else{
						$tmp += 0;
					}
				
					
					$name = "sec".$i;
					if(isset($_POST[$name]) && $_POST[$name] == true){
						$tmp += ((int)($_POST[$name]));							
					}
					else{
						$tmp += 0;
					}
					$this->step_timer[$real_index] = $tmp;
					$real_index++;
					$i++;
				}
			}

			public function showInfo(){
				//값이 제대로 들어갔는지 확인해주는 함수임
				//개발자모드에서 확인만 하는 용도로 나중에 프로젝트 제출때는 호출 ㄴㄴ
				echo "음식 이름 : ".$this->food_name."<br>";
	
				echo "음식 재료 : ".$this->food_ingredients."<br>";
				echo "소요 시간 : ".$this->consumed_time."<br>";
				echo "가격 : ".$this->price."<br>";
				if(isset($this->food_type))
					echo "음식 종류 : ".$this->food_type."<br>";
				echo "요리 단계는 총 ".$this->step_count." 단계인 레시피<br>";
				
				for($i = 1; $i <= count($this->step); $i++){
					echo "단계".$i.": ".$this->step[$i]."<br>";
					echo $this->step_timer[$i]."초 소요"."<br>";
				}
	 
			}
			
			public function uploadthumbnail(){
				//섬네일 저장 함수
				function getExt($file){
				$needle = strrpos($file, ".")+1;
				$slice = substr($file, $needle);
				$ext=strtolower($slice);
				return $ext;
				}
	
				$tmpname = $_FILES['imagefile']['tmp_name'];// 서버에 저장될 파일이름인데 나중에 알아보기 쉽게 변경해야함.
				$filename = $_FILES['imagefile']['name'];
	
				$file_exe_arr = explode(".", $filename);
				$file_name = $file_exe_arr[0];
				$ext = getExt($filename);
				$ext = strtolower($ext);
	
				if($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "gir" ){
					move_uploaded_file($tmpname, "./".$file_name.".".$ext);
					$this->thumbnail_src = $tmpname;
				}
				
			}
	

			
		}
		
		$newReceipe = new Receipe();
		$newReceipe->setInfo($_POST["food_name"], $_POST["food_ingredients"], $_POST["price"], $_POST["time"]);
		$newReceipe->setTimeinfo();
		$newReceipe->showInfo();
	
		//$newReceipe->uploadthumbnail();
		
		
		//여기서 부터는 db에 연결하고 데이터 저장
		$servername = "localhost";
		$user="root";
		$password = "123456";
		$dbname = "class";
		
		$connect = mysqli_connect($servername, $user, $password, $dbname);
		if($connect){
			 die("서버와의 연결 실패! : ".mysqli_connect_error());
		}
		echo "서버와의 연결 성공<br>";
		
		$sql = "INSERT INTO ReceipeList(Food_name, Food_ingredients, Food_type) VALUES(".$newReceipe->food_name.', '.$newReceipe->food_ingredients.', '. food_type.")";
		
		
		
    	if (mysqli_query($connect, $sql)) {

        	echo "레코드 추가 성공!";

    	} else {

        	echo "레코드 추가 실패! : ".mysqli_error($connection);

    	}

    	mysqli_close($connection);
		//db연결 종료
		
		
		//�����̷��� �ϱ����� db�� �����ϴ� ���� session �̵� �ʿ�
		//Header("Location:./writing_form.php");
		//Header("Location:./receipe_view.php");
		//���߿� ������ �� ����Ʈ�� �̵��ϵ��� �ؾ���
		
	?>

</body>

</HTML>