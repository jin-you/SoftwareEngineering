 <meta charset="utf-8">
<?php
    $connect= mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650") or die("fail");
    $pw = $_GET[pw];                        //Password
    $title = $_GET[title];                  //Title
    $content = $_GET[content];         //Content
    $date = date('Y-m-d H:i:s');            //Date

    $URL = './review_list.php';                   //return URL

    $query = "insert into whalsrl5650.Freeboard(number,title, content, date, hit, id, password)
                          values(null,'$title', '$content', '$date',0 , '$id', '$pw')";


                  $result = $connect->query($query);
                  if($result){
  ?>                  <script>
                          alert("<?php echo "글이 등록되었습니다."?>");
                          location.replace("<?php echo $URL?>");
                      </script>
  <?php
                  }
                  else{
                          echo "FAIL";
                  }

                  mysqli_close($connect);
  ?>
