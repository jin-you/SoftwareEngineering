<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//unpkg.com/bootstrap@4/dist/css/bootstrap.min.css">
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script>
	var stepcount = 0;
	var receipe = new Array();
	/*
	 $(function() {
        $("#add_step_btn").on("click", function() {
            $("#step").append("<input type='text' placeholder='Text input'>");
        });
    });
	*/
	window.onload=function(){
		document.getElementById("submit").onclick=makeData;
	}

	function makeData(){

		var i;
		var tmp_obj;
		var tmp_id;
		for(i = 0; i<stepcount; i++){
			tmp_id = "Step" + i;
			tmp_obj = document.getElementById(tmp_id);
			receipe[i] = tmp_obj.value.split("\n");
		}
		alert(receipe);
	}

	function addStep(current){
		var new_obj;
		var tmp_id;
		var text;
		var tmp;
		var before_obj;
		var list_obj;
		var list_el;
		var del_btn;
		var del_txt_node;
		var div;
		var div_name;

		tmp = "Step " + (stepcount + 1);
		tmp_id = "Step" + (stepcount + 1);
		div_name = "Step_div" + (stepcount + 1);

		new_obj = document.createElement('textarea');
		new_obj.setAttribute('name', tmp_id);
		new_obj.setAttribute('class', 'form-control');
		new_obj.setAttribute('id', tmp);
		new_obj.setAttribute('rows', '3');

		del_btn = document.createElement('button');
		del_btn.setAttribute('class', 'btn btn-danger btn-space');
		del_btn.setAttribute('id',  stepcount + 1);
		del_btn.setAttribute('onclick', 'deleteStep(id)');
		del_txt_node = document.createTextNode('취소');
		del_btn.appendChild(del_txt_node);

		div = document.createElement('div');
		div.setAttribute('name', div_name);
		div.setAttribute('id', div_name);
		div.appendChild(new_obj);
		div.appendChild(del_btn);
		div.appendChild(document.createElement('hr'));
		div.appendChild(document.createElement('p'));

		before_obj = document.getElementById("step");
		before_obj.appendChild(div);
		
		
		
		
		stepcount++;
	}

	function deleteStep(current){
		var tmp_obj = "Step_div" + current;
		var target = document.getElementById(tmp_obj);
		target.remove();
	}
</script>


<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Insert title here</title>
</head>
<body>
	<form action="request.php" method="post" enctype="multipart/form-data">
		<div class="container" style="width:50%;">	
			<div style="width:100%;">
			<img src="default.jpg" alt="..." class="img-thumbnail">
			</div>
			<hr>
			
			<div class="container" style="width:50%;">
				<input class="form-control form-control-lg" type="text" placeholder="음식 이름" name="food_name">		
			</div>
			<hr>
					
			<div class="container" style="width:50%;">
				<textarea class="form-control" name="food_ingredients" rows="5">음식 재료, 소요시간 필요</textarea>
			</div>
			<hr>
			<div class="container" style="width:50%;">				
				소요 시간<br/>
				<input type = 'radio' name = 'time' value= '5'/> 10분 미만
				<input type = 'radio' name = 'time' value= '20'/> 10분~30분

				<input type = 'radio' name = 'time' value= '45'/> 30분~1시간
				<input type = 'radio' name = 'time' value= '100'/> 1시간 이상
				<br/><br/>
			</div>
			<hr>
			
			<div class="container" style="width:50%;">
				가격대<br/>
				<input type = 'radio' name = 'price' value= '5000'/> 만원 미만
				<input type = 'radio' name = 'price' value= '15000'/> 만원~2만원

				<input type = 'radio' name = 'price' value= '25000'/> 2만원~3만원
				<input type = 'radio' name = 'price' value= '50000'/> 3만원 이상
				<br/><br/>
			</div>
			<hr>
			
		
		
			<div class="row text-center" style="width:100%">
				<div style="float:none; margin:0 auto">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="양식" name="food_type">
						<label class="form-check-label" for="inlineCheckbox1">양식</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="중식" name="food_type">
						<label class="form-check-label" for="inlineCheckbox2">중식</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="한식" name="food_type">
						<label class="form-check-label" for="inlineCheckbox3">한식</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="한식" name="food_type">
						<label class="form-check-label" for="inlineCheckbox3">일식</label>
					</div>
				</div>
			</div>
			<hr>
			
			<div id="step" style="float:none; margin:0 auto">
				단계별 조리법이 추가되는 div<br>
				조리법, step누를때마다 단계 추가, 삭제버튼도 필요<br>	
			</div>
				
				<button type="button" id="add_step_btn" style="height:50px" class="btn btn-primary btn-lg btn-block" onclick="addStep(this.id)">요리 과정 추가</button>
				<br>	
				<button type="submit" id="submit" class="btn btn-success btn-lg btn-block" style="height:50px">레시피 올리기</button>						
		</div>
	</form>


	<!--자바 스크립트 파일은 body 끝나는 가장 마지막 부분에 넣어줘야함.
	제이쿼리 먼저 인클루드하고 부트스트랩 인클루드해야함
	부트스트랩이 제이쿼리 기반으로 만들어졌기 때문-->

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>