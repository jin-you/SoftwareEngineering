<?php

  session_start();
  require_once("../lib/MYDB.php");
  $pdo = db_connect();
  $ID = $_SESSION['ID'];
  
  //header('Content-Type: text/html; charset=UTF-8');

    $title = $_POST['title'];
    $content = $_POST['content'];
    $time = $_POST['content'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $ingredient = $_POST['ingredient'];
    
    $sql = "insert into Recipe(title,type,price,content,cookTime,ingredients,userID);
    
    
    
    
     
 try{

$pdo->beginTransaction();
$sql = "insert into phptest.Recipe VALUES(:title, :type, :price, :content, :cookTime, :ingredient, :userID)";
 $stmh = $pdo->prepare($sql);
 $stmh->bindValue(":title", $title, PDO::PARAM_STR); 
 $stmh->bindValue(":type", $type, PDO::PARAM_STR);
 $stmh->bindValue(":price", $price, PDO::PARAM_INT);
 $stmh->bindValue(":content", $content, PDO::PARAM_STR);
 $stmh->bindValue(":cookTime", $time, PDO::PARAM_INT);
 $stmh->bindValue(":ingredient",$ingredient,PDO::PARAM_STR);
 $stmh->bindValue(":userID",$ID,PDO::PARAM_STR);
 $stmh->execute();
 $pdo->commit();

print "<script language=javascript> alert('레시피 등록을 완료하였습니다!'); location.replace('http://localhost/Hankki/index.php'); </script>";
 
 
 

 } catch (PDOException $Exception) {
 $pdo->rollBack();
 print "오류: ".$Exception->getMessage();
 }
    
    
?>
