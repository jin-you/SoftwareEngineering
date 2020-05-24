<html>
	<head>
	</head>
	<body>
		<?php
			phpinfo();
			$food_list = array();
			//포토앨범방식에 대해 섬네일 사진을 표현해줄 데이터
		
		?>
		
	</body>
	
	
	<form action="writing_receipe.php" method="post">
		음식 이름:<input type="text" name="name"><br>
		
		걸리는 시간:<input type="text" name="email"><br>
		<!--현재는 텍스트로 입력받앗지만, 버튼을 클릭하든 뭔가 select한 정보를 int형으로 처리해야함
			부트스트랩에 button이나 input 요소에 대해 알아봐야할듯
		-->
		<input type="submit">
	</form>
	
</html>