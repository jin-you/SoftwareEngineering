  
<?php
	session_start();
	require_once("../lib/MYDB.php");
	$pdo = db_connect();
    if(!isset($_SESSION["ID"]))
	{
?>
<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="##########" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href=".#########">전체 레시피</a></li>
                                <li><a href="#####">카테고리</a>
                                <ul class="dropdown">
                                        <li><a href="#####">양식</a></li>
                                        <li><a href="####l">중식</a></li>
                                        <li><a href="#####l">한식</a></li>
                                        <li><a href=".####l">일식</a></li>
                                    </ul>
                                </li>
                                 <li><a href=".###">자유게시판</a></li>
                             
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a href="./member/insertForm.php" class="primary-btn"><i class="fa fa-plus"></i>회원가입</a>
                            <a href="./login/login_form.php" class="primary-btn"><i class="fa fa-plus"></i>로그인</a>
                            <a href="#" class="login-btn"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <?php
	}
	else
	{
     ?>
    
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="##########" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href=".#########">전체 레시피</a></li>
                                <li><a href="#####">카테고리</a>
                                <ul class="dropdown">
                                        <li><a href="#####">양식</a></li>
                                        <li><a href="####l">중식</a></li>
                                        <li><a href="#####l">한식</a></li>
                                        <li><a href=".####l">일식</a></li>
                                    </ul>
                                </li>
                                 <li><a href=".###">자유게시판</a></li>
                              
                               
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a class="text-light"><?=$_SESSION["NICKNAME"]?> 님 환영합니다 </a>
                            <a href="./login/logout.php" class="primary-btn"><i class="fa fa-plus"></i>로그아웃</a>
                            <a href="##" class="primary-btn"><i class="fa fa-plus"></i>마이페이지</a>
                            <a href="##" class="login-btn"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>   
    
    
    
        
<?php
	}
?>
