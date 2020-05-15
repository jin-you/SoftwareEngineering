<?php
    session_start();
?>


<html>
     <head>
                <meta charset="UTF-8">   
               <meta name="description" content="Directing Template">
               <meta name="keywords" content="Directing, unica, creative, html">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta http-equiv="X-UA-Compatible" content="ie=edge">
                           <!--Bootsrap 4 CDN-->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
                 <link rel="stylesheet" href="../css/bootstrap.css">
                 <link rel="stylesheet" href="../css/login.css">

            <!-- Google Font -->
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

                <!-- Css Styles -->
                <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">    
                <link rel="stylesheet" href="../css/nice-select.css" type="text/css">    
                <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">   
                <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
                <link rel="stylesheet" href="../css/style.css" type="text/css">
                   
      </head>
   
       <body>              
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             <script type ="text/javascript" src="../js/bootstrap.js"></script>          
             <?php include "../lib/top_menu_1.php"; ?>                          
              
             <div class="container">
	<div class="d-flex justify-content-center h-100">
            
		<div class="card">
			<div class="card-header">
				<h3>로그인</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				  <form name="login_form" method="post" action="loginAction.php"> 
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control"name="ID" class="login_input" placeholder="id" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="PASSWORD" class="login_input" placeholder="password" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">아이디저장
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn btn-light"  onclick="document.member_form.submit()">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					계정이 없으시다면?<a href="../member/insertForm.php">회원가입</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">비밀번호찾기</a>
				</div>
			</div>          
		</div>
             
	</div>
</div>
   
   <!-- Js Plugins -->
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
     
     