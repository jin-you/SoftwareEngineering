<?php
session_start();
 ?>
 <!DOCTYPE HTML>
 <html>
     <head>
     <meta charset="UTF-8">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">    
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">   
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">    
	
	<link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
        
	<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Write Your Recipe~!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		  #jb-container {
			width: 940px;
			margin: 10px auto;
			padding: 20px;
			border: 1px solid #bcbcbc;
			color : #FFFFFF;
			background-color : #424242;;
			font-family : 'Sans-Serif';
		  }
		  #jb-header {
			padding: 20px;
			margin-bottom: 20px;
			border: 1px solid #bcbcbc;
			background-color : #FFFFFF;
			color : #424242;
			font-family : 'Sans-Serif';
		  }
		  #jb-content {
			width: 900px;
			padding: 20px;
			margin-bottom: 20px;
			float: center;
			border: 1px solid #bcbcbc;
			background-color : #FFFFFF;
			color : #424242;
			font-family : 'Sans-Serif';
		  }
		  #jb-sidebar {
			width: 260px;
			padding: 20px;
			margin-bottom: 20px;
			float: right;
			border: 1px solid #bcbcbc;
		  }
		  #jb-footer {
			clear: both;
			padding: 20px;
			border: 1px solid #bcbcbc;
			color : #424242;
			background-color : #FFFFFF;
			font-family : 'Sans-Serif';
		  }
		  @media ( max-width: 480px ) {
			#jb-container {
			  width: auto;
			}
			#jb-content {
			  float: none;
			  width: auto;
			}
			#jb-sidebar {
			  float: none;
			  width: auto;
			}
		  }
		  
		
		</style>
  
  </head>
 
 <body>
 


        <form name="board_form" method="post" action="upload.php" enctype="multipart/form-data">
                    <div id = "jb-container">
							<div id = 'jb-header'>
								<div >&nbsp; 닉네임:<?=$_SESSION["NICKNAME"]?> </div>                    

								<div >&nbsp; 제목 </div>
								<input type="text" name="TITLE" required>
							</div>
							
							<div id = 'jb-content'>
							
								
								<div> &nbsp;카테고리<br/></div>
								 <div>                 
								 <select name = 'type'>
									 <option value="한식">한식</option>
									 <option value="중식" >중식</option>
									 <option value="일식">일식</option>
									 <option value="양식">양식</option>
								 </select>
								 </div>
								 <br/>
								
								<hr>
								
								<!--<div> 가격</div>
								<input type="text" name="PRICE" required>-->
								<div class="container" style="float:left;">
									가격대
									<input type = 'radio' name = 'price' value= '5000'/> 만원 미만
									<input type = 'radio' name = 'price' value= '15000'/> 만원~2만원
									<input type = 'radio' name = 'price' value= '25000'/> 2만원~3만원
									<input type = 'radio' name = 'price' value= '50000'/> 3만원 이상
								
								</div>
								
								
								<br/>
								<div style = "width:80%;">
								<!--<textarea rows="20" cols="80" name="CONTENT" required></textarea> -->
								&nbsp;<textarea class="form-control" name="CONTENT" rows="4">간단한 설명을 입력해주세요</textarea></br>
								&nbsp;<textarea class="form-control" name="ingredients" rows="4">음식 재료를 입력해주세요</textarea>					
								</div>
							
							<br/><br/>
							
							<div id = 'jb-footer' style = "width:80;">
								<div> 이미지파일1</div>
								<div class="col2"><input type="file" name="upfile" required></div>
							</div></br>
								<div align="right">
									<!--<input type="submit" value="글쓰기">-->
									<button type = "submit" class = "btn btn-outline-success btn-lg">글쓰기</button>
									<button type="button" onclick="location.href='list.php'" class="btn btn-outline-primary btn-lg">목록</button>
								</div>
							
						</div>
					</div>
        </form> 
            <script src="../js/jquery-3.3.1.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.nice-select.min.js"></script>
            <script src="../js/jquery-ui.min.js"></script>
            <script src="../js/jquery.nicescroll.min.js"></script>
            <script src="../js/jquery.barfiller.js"></script>
            <script src="../js/jquery.magnific-popup.min.js"></script>
            <script src="../js/jquery.slicknav.js"></script>
            <script src="../js/owl.carousel.min.js"></script>
            <script src="../js/main.js"></script>
		
 </body>
 </html>