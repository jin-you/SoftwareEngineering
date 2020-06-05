<?php

$connect = mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650") or die("connect fail");
$id = $_GET[id];
$number = $_GET[number];

$query = "select title, content, date, id from whalsrl5650.Freeboard where number=$number";

$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$title = $rows['title'];
$content = $rows['content'];
$usrid = $rows['id'];

session_start();

$URL = './review_list.php';


   if($_SESSION['ID']==$usrid)  {

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
   <title>modify</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   <form name="board_form" method="get" action="review_modify_upload.php" enctype="multipart/form-data">

<div class="container">

<form>
 <div class="form-group">

 <div class="form-group"> <br><Br>
   <label for="exampleInputEmail1">글 제목</label><Br>
   <input type="text" class="form-control" name = title value="<?=$title?>">
 </div>

   <div class="form-group">
     <label for="exampleInputEmail1">작성자</label><Br>
     <input type= "hidden" class="form-control" name = "id" value="<?=$_SESSION['ID']?>"><?=$_SESSION['ID']?>
   </div>

   <div class="form-group">
     <label for="exampleInputPassword1">글 내용</label> <Br>
     <textarea class="form-control" rows="10" id="comment"  name = content value="<?=$content?>" required></textarea>
   </div>


 </div>
   <hr>
 </form>

               <div align="right">
                 <input type="hidden" name="number" value="<?=$number?>">
                 <button type = "submit" class = "btn btn-outline-success btn-lg">수정</button>
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

<?php   }

          else {
?>              <script>
                        alert("권한이 없습니다.");
                        location.replace("<?php echo $URL?>");
                </script>
<?php   }

?>
