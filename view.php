<?php
      $connect= mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650") or die("fail");
      $number = $_REQUEST["number"];
      session_start();
      $query = "select * from whalsrl5650.Freeboard where number =$number";
      $result = $connect->query($query);
      $rows = mysqli_fetch_assoc($result);
      $hit = "update  whalsrl5650.Freeboard set hit=hit+1 where number=$number";  // 조회수 증가
      $connect->query($hit);
?>

  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width", initial-scale=1">
    <title>view</title>

    <style>
    .view_table {
    border: 1px solid #444444;
    margin-top: 30px;
    }
    .view_title {
    height: 30px;
    text-align: center;
    background-color: #cccccc;
    color: black;
    width: 1000px;
    }
    .view_id {
    text-align: center;
    background-color: #EEEEEE;
    width: 30px;
    }
    .view_id2 {
    background-color: white;
    width: 60px;
    }
    .view_hit {
    background-color: #EEEEEE;
    width: 30px;
    text-align: center;
    }
    .view_hit2 {
    background-color: white;
    width: 60px;
    }
    .view_content {
    padding-top: 20px;
    border-top: 1px solid #444444;
    height: 500px;
    }
    .view_btn {
    width: 700px;
    height: 200px;
    text-align: center;
    margin: auto;
    margin-top: 50px;
    }
    .view_btn1 {
    height: 50px;
    width: 100px;
    font-size: 20px;
    text-align: center;
    background-color: white;
    border: 2px solid black;
    border-radius: 10px;
    }
    .view_comment_input {
    width: 700px;
    height: 500px;
    text-align: center;
    margin: auto;
    }
    .view_text3 {
    font-weight: bold;
    float: left;
    margin-left: 20px;
    }
    .view_com_id {
    width: 100px;
    }
    .view_comment {
    width: 500px;
    }
    </style>
</head>

<body>

<div class="container">

        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><b><?php echo $rows['title']?></b></td>
        </tr>




        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2">&nbsp;&nbsp;<?php echo $rows['id']?></td></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2">&nbsp;&nbsp; <?php echo $rows['hit']?></td>
        </tr>


        <tr>
                <td colspan="4" class="view_content" valign="top">
                 <?php  echo $rows['content'] ?></td>
        </tr>
        </table>



     <div class = "view_btn">
      <div align="center">
        <button class = "view_btn1" type="button" onclick="location.href='review_list.php'">목록으로</button>

        <?php
        if(isset($_SESSION["ID"])){
      ?>
      <button class = "view_btn1" type="button" onclick="location.href='review_modify.php?number=<?=$number?>&id=<?=$_SESSION["ID"]?>'">수정</button>
      <button class = "view_btn1" type="button" onclick="location.href='review_delete.php?number=<?=$number?>&id=<?=$_SESSION["ID"]?>'">삭제</button>
    </div>
    </div>
    </div>

      <?php
      }
      ?>

    </div>

  </body>

  </html>
