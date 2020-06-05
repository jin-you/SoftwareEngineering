<?php

$connect = mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650") or die("connect fail");
$id = $_GET[id];
$number = $_GET[number];

$query = "select * from whalsrl5650.Freeboard where number=$number";

$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$usrid = $rows['id'];

session_start();

$URL = './review_list.php';


   if($_SESSION['ID']==$usrid)  {


$query = "delete from whalsrl5650.Freeboard where number=$number";
$result = $connect->query($query);

if($result) {
?>
  <script>
    alert("<?php echo "글이 삭제되었습니다."?>");
    location.replace("<?php echo $URL?>");
  </script>
<?php    }
else {
  echo "fail";
}

}


    else {
?>              <script>
              alert("권한이 없습니다.");
              location.replace("<?php echo $URL?>");
      </script>
<?php   }

?>
