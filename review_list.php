<?php
	session_start();
	require_once("../lib/MYDB.php");
	$pdo = db_connect();
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>자유 게시판</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css"
    <!-- Css Styles -->
 <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
  <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="../css/barfiller.css" type="text/css">
  <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="../css/style.css" type="text/css">

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>

  <body>
    <?php include "../lib/top_menu_1.php"; ?>
    <?php
       $connect = mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650") or die ("connect fail");
       $query ="select * from whalsrl5650.Freeboard order by number desc";
       $result = $connect->query($query);
       $total = mysqli_num_rows($result);

    ?>

		<div class="text-center">
				<h3><b>게시판</b></h3><br>
		</div>
		<hr>
  <div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
      <td width = "20" align="center"><b>번호</b></td>
     <td width = "130" align = "center"><b>제목</b></td>
     <td width = "40" align = "center"><b>작성자</b></td>
     <td width = "80" align = "center"><b>작성시간</b></td>
     <td width = "20" align = "center"><b>조회수</b></td>
    </tr>
  </thead>

  <tbody>
    <?php
          while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                if($total%2==0){
    ?>                  <tr class = "even">
                  <?php   }
                  else{
                    ?>                      <tr>
                    <?php } ?>

                    <td width = "20" align = "center"><?php echo $total?></td>
                    <td width = "130" align = "center">
                    <a href = "view.php?number=<?php echo $rows['number']?>">
                    <?php echo $rows['title']?></td>
                      <td width = "40" align = "center"><?php echo $rows['id']?></td>
                    <td width = "80" align = "center"><?php echo $rows['date']?></td>
                    <td width = "20" align = "center"><?php echo $rows['hit']?></td>
                    </tr>
            <?php
                    $total--;
                  }

            ?>

				</table>
					</tbody>
				</table>


</table>

<hr/>

<div class="low-button" align="right">
  	<button type="button" onclick="location.href='review_list.php'" class="btn btn-outline-primary btn-lg">목록</button>
  <?php
  if(isset($_SESSION["ID"])){
?>
   <button type="button" onclick="location.href='review_write.php'" class = "btn btn-outline-success btn-lg">글쓰기</button>
</div>
  </div>
<?php
}
?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
