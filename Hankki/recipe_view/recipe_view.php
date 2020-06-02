<?php
$link = mysqli_connect("localhost", "whalsrl5650", "whalsrl5650!", "whalsrl5650");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	
	$id=$_GET['recipeID'];
	$sql = "select * from whalsrl5650.Recipe where recipeID=$id";
								
	$result = mysqli_query($link, $sql);		

	$row=mysqli_fetch_assoc($result);
	$count=$row['cookTime'];
	
	$item_nick = $row['nickname'];
		
	$item_title = str_replace(" ", "&nbsp;", $row['title']);
	
	$item_content = $row['content'];
	
	$item_date = $row['uploadDate'];
	$item_date = substr($item_date, 0, 10);
	
	$item_hit = $row['view_count'];
	$new_hit = $item_hit + 1;
	
	$item_image=$row['Image_copied'];
	$item_image="../data/".$item_image;
	
	$item_ingredients=$row['ingredients'];
	
	$item_price=$row['price'];
		
	$sql1 = "update whalsrl5650.Recipe set view_count=$new_hit where recipeID=$id;"; // 글 조회수 증가		
	$result1=mysqli_query($link, $sql1);
	
	 $sql2="select * from whalsrl5650.Step where recipeID=$id";
	 $result2=mysqli_query($link, $sql2);
	 
	 $row_step=mysqli_fetch_assoc($result2);
	 $count=0;

	$step1 = $row_step['step1'];
	if(!empty($step1)){
		$count++;
	}
	
	$step2 = $row_step['step2'];
	if(!empty($step2)){
		$count++;
	}
	
	$step3 = $row_step['step3'];
	if(!empty($step3)){
		$count++;
	}
		
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=1">
    <title>Recipe view</title>
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<style>

	.wrap {
	  height: 100%;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	}

	.button {
	  width: 140px;
	  height: 45px;
	  font-family: 'Roboto', sans-serif;
	  font-size: 11px;
	  text-transform: uppercase;
	  letter-spacing: 2.5px;
	  font-weight: 500;
	  color: #000;
	  background-color: #fff;
	  border: none;
	  border-radius: 45px;
	  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	  transition: all 0.3s ease 0s;
	  cursor: pointer;
	  outline: none;
	  }

	.button:hover {
	  background-color: #2EE59D;
	  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
	  color: #fff;
	  transform: translateY(-7px);
	}
	
	.coupon {
		border: 3px dashed #bcbcbc;
		border-radius: 10px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
		"Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
		font-weight: 300;
	}

	.coupon #head {
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		min-height: 56px;
	}

	.coupon #footer {
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
	}

	#title .visible-xs {
		font-size: 12px;
	}

	.coupon #title img {
		font-size: 30px;
		height: 30px;
		margin-top: 5px;
	}

	@media screen and (max-width: 500px) {
		.coupon #title img {
			height: 15px;
		}
	}

	.coupon #title span {
		float: right;
		margin-top: 5px;
		font-weight: 700;
		text-transform: uppercase;
	}

	.coupon-img {
		width: 100%;
		margin-bottom: 15px;
		padding: 0;
	}

	.items {
		margin: 15px 0;
	}

	.usd, .cents {
		font-size: 20px;
	}

	.number {
		font-size: 40px;
		font-weight: 700;
	}

	sup {
		top: -15px;
	}

	#business-info ul {
		margin: 0;
		padding: 0;
		list-style-type: none;
		text-align: center;
	}

	#business-info ul li { 
		display: inline;
		text-align: center;
	}

	#business-info ul li span {
		text-decoration: none;
		padding: .2em 1em;
	}

	#business-info ul li span i {
		padding-right: 5px;
	}

	.disclosure {
		padding-top: 15px;
		font-size: 11px;
		color: #bcbcbc;
		text-align: center;
	}

	.coupon-code {
		color: #333333;
		font-size: 11px;
	}

	.print {
		font-size: 14px;
		float: right;
	}
	
	#quicknav ul {
		margin: 0;
		padding: 0;
		list-style-type: none;
		text-align: center;
	}

	#quicknav ul li { 
		display: inline; 
	}

	#quicknav ul li a {
		text-decoration: none;
		padding: .2em 1em;
	}
	
		*{margin:0; padding:0;}
	.star{
	  display:inline-block;
	  width: 30px;height: 60px;
	  cursor: pointer;
	}
	.star_left{
	  background: url(http://gahyun.wooga.kr/main/img/testImg/star.png) no-repeat 0 0; 
	  background-size: 60px; 
	  margin-right: -3px;
	}
	.star_right{
	  background: url(http://gahyun.wooga.kr/main/img/testImg/star.png) no-repeat -30px 0; 
	  background-size: 60px; 
	  margin-left: -3px;
	}
	.star.on{
	  background-image: url(http://gahyun.wooga.kr/main/img/testImg/star_on.png);
	}
	
	#star_grade a{
        text-decoration: none;
        color: gray;
    }
    #star_grade a.on{
        color: red;
    }	
						
	</style>
	
	<audio id='audio_play' src='./sound.mp3'></audio> 
</head>

<body>

<div class="container">

    <div class="row">
		<h1 class="text-center"><?php echo $item_title?></h1>
        <p class="text-center"></p>
    </div>

    <div id="quicknav">
        <ul>
			<?php
			for($step_count=1; $step_count <= $count; $step_count++){?>
				<li><a href="#<?php echo $step_count?>" class="btn btn-primary">step <?php echo $step_count?> </a></li>
			
			<?php } ?>
        </ul>
    </div>
	<br><br>

	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default coupon">
              <div class="panel-heading" id="head">
                <div class="panel-title" id="title">
                    <span class="hidden-xs"><?php echo $item_title?></span>
                    <span class="visible-xs"><?php echo $item_title?></span>
                </div>
              </div>
              <div class="panel-body">
				<?php echo "<img src='$item_image' class='coupon-img img-rounded'>";?>
				<div class="col-md-9">
                    <ul class="items">
						<li>가격 : <?php 
						if ($item_price==5000){ echo '만원 미만';}
						else if ($item_price ==15000) {echo '만원~ 2만원';}
						else if ($item_price == 25000) {echo '2만원 ~ 3만원';}
						else if ($item_price == 50000) {echo '3만원 이상';}
						?> </li>
                        <li>재료 : <?php echo $item_ingredients ?></li>	
                    </ul>
                </div>

                <div class="col-md-12">
                    <p class="disclosure">부가설명 : <?php echo $item_content ?></p>
                </div>
              </div>
              <div class="panel-footer">
                <div class="coupon-code">
                    작성일 : <?php echo $item_date?>
                </div>
                <div>
			작성자 : <?php echo $item_nick?>
		</div>
		<div align = "right">
			<p id="star_grade">
				 별점 입력하기 : 
				<a href="#">★</a>
				<a href="#">★</a>
				<a href="#">★</a>
				<a href="#">★</a>
				<a href="#">★</a>
			</p>
		</div>			
			
              </div>
			  
            </div>
    	</div>
    </div>

	<?php
	
	for($start_count=1; $start_count<=$count; $start_count++){
		$word="step";
		$now_step=$word.$start_count;
	?>
	
	<div class="row" id="<?php echo $start_count?>">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default coupon">
              <div class="panel-heading" id="head">
                <div class="panel-title" id="title" >
                    <span class="hidden-xs">step <?php echo $start_count?></span>
                    <span class="visible-xs">step <?php echo $start_count?></span>
                </div>
              </div>
              <div class="panel-body">
                <div class="col-md-9">
                    <ul class="items">
                        <li><?php echo $$now_step ?></li>
                    </ul>
                </div>
              </div>
			  
            </div>
    	</div>
    </div>  
	<?php } ?>

</div>


	<div align="center">
		<strong><h2>Timer</h2></strong><br>
		<span id="countdown"></span>
		<br>
		<div class="wrap"><button class="button" onclick="timer();">시작</button></div>
		<br><br>
		

	</div>

<?php	
		$sql3 = "select cookTime from whalsrl5650.Recipe where recipeid=$id;";
								
		$result3 = mysqli_query($link, $sql3);		

		$row3=mysqli_fetch_assoc($result3);
		$count=$row3['cookTime'];
		echo "<script>var count = '".$count."';</script>";

		
?>
	
<script type="text/javascript">
    var time = 0;
    var count_re=count;
	var count_min=parseInt(count_re/60);
	var count_sec=count_re%60;
	
	document.getElementById("countdown").innerHTML="<h1><b>" +count_min+"분&nbsp"+count_sec+"초</b></h1>";
	
	function play() { 
		var audio = document.getElementById('audio_play'); 
		if (audio.paused) { 
			audio.play(); 
		}else{ 
			audio.pause(); 
			audio.currentTime = 0 
		} 
	} 

    function timer() {
        clearInterval(time);
        time = setInterval("myTimer()", 1000);

    }

    function myTimer() {
        count_re= count_re - 1;
		count_min=parseInt(count_re/60);
		count_sec=count_re%60;
		
        document.getElementById("countdown").innerHTML = "<h1><b>" + count_min + "분&nbsp" + count_sec + "초</b></h1>";
        if (count_re == 0) {
            clearInterval(time); // 시간 초기화
            count_re=count;
			count_min=parseInt(count_re/60);
			count_sec=count_re%60;
			play();
        }
    }
	
		
	$('#star_grade a').click(function(){
		$(this).parent().children("a").removeClass("on");  /* 별점의 on 클래스 전부 제거 */ 
		$(this).addClass("on").prevAll("a").addClass("on"); /* 클릭한 별과, 그 앞 까지 별점에 on 클래스 추가 */
		var idx = $(this).index()+1;

		$.ajax({
			url:"reviewed.php",
			type:"GET",
			data:{'idx':idx,'id':<?php echo $id?>},
			dataType:"json",
		});

		return false;
	});


</script>

</body>

</html>
