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
		var time_div;
		var time_hour;
		var time_min;
		var time_sec;
		var time_div_tmp;
		var time_span_tmp;
		var string_tmp;


		tmp = "Step " + (stepcount + 1);
		tmp_id = "Step" + (stepcount + 1);
		div_name = "Step_div" + (stepcount + 1);

		new_obj = document.createElement('textarea');
		new_obj.setAttribute('name', tmp_id);
		new_obj.setAttribute('class', 'form-control');
		new_obj.setAttribute('id', tmp);
		new_obj.setAttribute('rows', '3');
		//텍스트 입력 태그 생성및 설정

		del_btn = document.createElement('button');
		del_btn.setAttribute('class', 'btn btn-danger btn-space');
		del_btn.setAttribute('id',  stepcount + 1);
		del_btn.setAttribute('onclick', 'deleteStep(id)');
		del_txt_node = document.createTextNode('취소');
		del_btn.appendChild(del_txt_node);
		//취소 태그 생성및 설정
		
		time_div = document.createElement('div');
		time_div.setAttribute('class', 'input-group input-group-sm mb-3');
		
		/////////////////////////////////////////////////////////////
		time_hour = document.createElement('input');
		time_hour.setAttribute('type', 'text');
		time_hour.setAttribute('class', 'form-control');
		time_hour.setAttribute('name', 'hour' + (stepcount + 1));
		time_hour.setAttribute('placeholder', '0');
		time_hour.setAttribute('aria-describedby','basic-addon2');
				
		time_div_tmp = document.createElement('div');
		time_div_tmp.setAttribute('class', 'input-group-append');
		time_span_tmp = document.createElement('span');
		time_span_tmp.setAttribute('class', 'input-group-text');
		time_span_tmp.setAttribute('id', 'basic-addon2');
		string_tmp = document.createTextNode('시');
		time_span_tmp.appendChild(string_tmp);
		time_div_tmp.appendChild(time_span_tmp);
		
		time_div.appendChild(time_hour);
		time_div.appendChild(time_div_tmp);	
		/////////////////////////////////////////////////////////////
		
		/////////////////////////////////////////////////////////////
		time_min = document.createElement('input');
		time_min.setAttribute('type', 'text');
		time_min.setAttribute('class', 'form-control');
		time_min.setAttribute('name', 'min' + (stepcount + 1));
		time_min.setAttribute('placeholder', '0');
		time_min.setAttribute('aria-describedby','basic-addon2');
		
		time_div_tmp = document.createElement('div');
		time_div_tmp.setAttribute('class', 'input-group-append');
		time_span_tmp = document.createElement('span');
		time_span_tmp.setAttribute('class', 'input-group-text');
		time_span_tmp.setAttribute('id', 'basic-addon2');
		string_tmp = document.createTextNode('분');
		time_span_tmp.appendChild(string_tmp);
		time_div_tmp.appendChild(time_span_tmp);
		
		time_div.appendChild(time_min);
		time_div.appendChild(time_div_tmp);
		
		/////////////////////////////////////////////////////////////
		
		/////////////////////////////////////////////////////////////
		time_sec = document.createElement('input');
		time_sec.setAttribute('type', 'text');
		time_sec.setAttribute('class', 'form-control');
		time_sec.setAttribute('name', 'sec' + (stepcount + 1));
		time_sec.setAttribute('placeholder', '0');
		time_sec.setAttribute('aria-describedby','basic-addon2');
		
		time_div_tmp = document.createElement('div');
		time_div_tmp.setAttribute('class', 'input-group-append');
		time_span_tmp = document.createElement('span');
		time_span_tmp.setAttribute('class', 'input-group-text');
		time_span_tmp.setAttribute('id', 'basic-addon2');
		string_tmp = document.createTextNode('초');
		time_span_tmp.appendChild(string_tmp);
		time_div_tmp.appendChild(time_span_tmp);
		
		time_div.appendChild(time_sec);
		time_div.appendChild(time_div_tmp);
		/////////////////////////////////////////////////////////////
				
		//div 태그안에 입력, 취소태그 넣기
		div = document.createElement('div');
		div.setAttribute('name', div_name);
		div.setAttribute('id', div_name);
		div.appendChild(new_obj);
		div.appendChild(time_div);
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
				<input type = 'radio' name = 'time' value= '60'/> 1시간 이상
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

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>