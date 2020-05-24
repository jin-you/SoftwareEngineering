<?php
ini_set('display_errors', '0');

  session_start();
  require_once("../lib/MYDB.php");
  $pdo = db_connect();
  $ID = $_SESSION['userid'];
  
  //header('Content-Type: text/html; charset=UTF-8');

    $title = $_POST['title'];
    $content = $_POST['content'];
    $time = $_POST['content'];
    $type = $_POST['type'];
    $ingredient = $_POST['ingredient'];
    
    $sql = "insert into Recipe(title,type,content,userID,time,ingredients)
    
    
    
    
    
    
    
    
    if($row = mysqli_fetch_row(
 if(isset($_POST['patient'])){ 
  
  $ID = $_POST['ID'];//99
 $PW = $_POST['PW'];//99
  
  if($ID == "" || $PW == ""){?>
    <script> alert("type ID or PW"); history.back();</script><?php
	}
  else{
    
    $sql = "select * from patient_info where ID='" . $ID . "';";
    $result = $link->query($sql);
    
		if(mysqli_num_rows($result)){
      $row = mysqli_fetch_assoc($result);
      
      //비밀번호가 맞다면 세션 생성
                if($row['Pw']==$PW){
                        $_SESSION['userid']=$ID;//세션에 ID 저장
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("login success");
                                        location.replace("P_login.html");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("Invalid ID and password");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("Invalid ID and password");
                        history.back();
                </script>
<?php
                }
 
  }
 }
 else if(isset($_POST['doctor'])){ 
  
  $ID = $_POST['ID'];//99
  $PW = $_POST['PW'];//99
  if($ID == "" || $PW == ""){?>
    <script> alert("type ID or PW"); history.back();</script><?php
	}
  else{
    
    $sql = "select * from doctor_info where ID='" . $ID . "';";
    $result = $link->query($sql);
    
	if(mysqli_num_rows($result)){
		$row = mysqli_fetch_assoc($result);
      
				//비밀번호가 맞다면 세션 생성
        if($row['Pw']==$PW){
			$_SESSION['userid']=$ID;//세션에 ID 저장
            if(isset($_SESSION['userid'])){ //ID 저장했어 ? 구럼 비번 맞단거자나
            ?>      <script>
                        alert("login success");
                        location.replace("D_login.html");
                    </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("Invalid ID and password");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("Invalid ID and password");
                        history.back();
                </script>
<?php
                }
 
  }
 }
?>