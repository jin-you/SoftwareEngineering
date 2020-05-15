 <?php

 session_start();

 ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/shorcut.jpg">
        
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/join.css" />

       <!-- Top menu Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">    
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">   
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
 

 
 <script>

 function check_ID()  {

 window.open("check_ID.php?ID="+document.member_form.ID.value,"IDcheck",
 "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
 }



 function check_NICKNAME() //닉네임 중복체크

 {

 window.open("check_NICKNAME.php?NICKNAME="+document.member_form.NICKNAME.value,

 "NICKcheck", "left=200,top=200,width=200,height=60, scrollbars=no,resizable=yes");

 }
 
 
 function check_input() 

 {



    if(document.member_form.PASSWORD.value !=

   document.member_form.PASSWORD_confirm.value)

    {

    alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");

    document.member_form.PASSWORD.focus();

    document.member_form.PASSWORD.select();

    return;

    }



 document.member_form.submit();

 }
 


 function reset_form()

 {

 document.member_form.id.value = "";

 document.member_form.PASSWORD.value = "";

 document.member_form.PASSWORD_confirm.value = "";

 document.member_form.NAME.value = "";

 document.member_form.NICKNAME.value = "";

 document.member_form.PHONE2.value = "";

 document.member_form.PHONE3.value = "";

 document.member_form.EMAIL1.value = "";

 document.member_form.EMAIL2.value = "";



 document.member_form.ID.focus();



 return;

 }
 
 
 </script>

 </head> 
 
<body>
      <?php include "../lib/top_menu_1.php"; ?>     
     
        <div class="container">
                <div style="text-align:center"><img class="mt-100" src="https://i.ibb.co/1vh49st/register-297979.png" alt="resim" style="width:20%"></div>
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-light">회원가입</h2>
                        </div>
                        <div class="card-body p-2">
                            <form name="member_form" method="post" action="insertPro.php">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text"><i class='fas fa-user-graduate ml-2' style='font-size:22px'></i></span>
                                        <input type="text" class="form-control"name="ID" placeholder="아이디" id="tbAd" required>    
                                         <button class="btn btn-warning" type="submit" onclick="check_ID()">아이디 중복확인</button>  
                                    </div>         
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-key ml-2' style='font-size:22px'></i></span>
                                        <input type="password" class="form-control" name="PASSWORD" placeholder="비밀번호" id="tbSoyad" required>            
                                    </div>   
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-key ml-2' style='font-size:26px'></i></span>
                                        <input type="password" class="form-control" name="PASSWORD_confirm" placeholder="비밀번호확인" id="tbEmail" required>                                             
                                    </div>       
                                </div>
                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class='fas fa-user-graduate ml-2' style='font-size:20px'></i></span>
                                  <input type="text" class="form-control" name="NICKNAME" placeholder="닉네임" id="tbSifre" required>
                                   <button class="btn btn-warning" type="submit"  onclick="check_NICKNAME()">닉네임 중복확인</button> 
                              </div>         
                          </div>
                          <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class='fa fa-envelope ml-2' style='font-size:20px'></i></span>
                                <input type="text" class="form-control" name="EMAIL" placeholder="이메일" id="tbTekrarSifre" required>                 
                            </div>         
                        </div>
                                <div class="row align-items-center remember">
                                    <div class="form-group form-check-inline mx-4">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" id="cbKosul" required>
                                            <a href="#" class="links">I agree to this terms.</a>
                                            <div class="invalid-tooltip">*
                                                You cannot proceed without accepting the terms and conditions.</div>
                                        </label>
                                    </div>
                                </div>      
                            </form>
                        </div>
                        <div class="card-footer p-2">
                            <div class="d-flex justify-content-center links">
                               <button type="submit" id="btnKayıtOl" class="btn login_btn text-light btn-block" style=" font-weight: 600;"onclick="check_input()">가입하기</button>
                              
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
 