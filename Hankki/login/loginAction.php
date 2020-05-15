<?php
session_start();

$ID = $_REQUEST["ID"];
$PASSWORD=$_REQUEST["PASSWORD"];

require_once("../lib/MYDB.php");
$pdo = db_connect();

try{
    $sql = "select * from phptest.member where ID = ?";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(1,$ID,PDO::PARAM_STR);
    $stmh->execute();
   $count = $stmh->rowCount();
} catch (PDOException $Exception) {
 print "오류: ".$Exception->getMessage();
} 

$row=$stmh->fetch(PDO::FETCH_ASSOC);

if($count<1){
        ?>
    <script>
        alert("아이디가 틀립니다");
        history.back();
     </script>    
        <?php
}elseif($PASSWORD != $row["PASSWORD"]){  
        ?>
        <script>   
            alert("비밀번호가 틀립니다");
            history.back();
         </script>
<?php
}else{
        $_SESSION["ID"]=$row["ID"];       
        $_SESSION["NICKNAME"]=$row["NICKNAME"];    
print "<script language=javascript> alert('로그인이 완료되었습니다'); location.replace('http://localhost/Hankki/index.php'); </script>";
       
    exit;
}
?>