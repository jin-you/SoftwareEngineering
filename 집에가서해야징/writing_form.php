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
			tmp_id = "step_text" + i;
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

		tmp = "Step " + (stepcount + 1);
		tmp_id = "step_text" + stepcount;
		
		new_obj = document.createElement('input');
		new_obj.setAttribute('name', tmp_id);
		new_obj.setAttribute('class', 'form-control');
		new_obj.setAttribute('rows', '3');
		new_obj.setAttribute('type', 'text');
		new_obj.setAttribute('placeholder', tmp);
		
		del_btn = document.createElement('button');
		del_btn.setAttribute('class', 'btn btn-danger btn-space');
		del_btn.setAttribute('id',  stepcount);
		del_btn.setAttribute('onclick', 'deleteStep(id)');
		del_txt_node = document.createTextNode('취소');
		del_btn.appendChild(del_txt_node);

		before_obj = document.getElementById("step");
		list_obj = document.getElementById("step_list");
		list_el = document.createElement('ul');
		list_el.appendChild(new_obj);
		list_el.appendChild(del_btn);
		list_obj.appendChild(list_el);
	
		stepcount++;
		
		
	}
	
	function deleteStep(current){
		var tmp_obj = "step_text" + current;
		tmp_obj = document.getElementById(current);
		alert(tmp_obj);
	}
</script>


<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Insert title here</title>
</head>
<body>
	<form role="form" action="request.php" method="POST">
	
	<div class="container" style="width:50%;">
	
		<div style="width:100%;">
		<img src="default.jpg" alt="..." class="img-thumbnail">
		</div>
		<hr>		
	
	<div class="container" style="width:250px;">
		<input class="form-control form-control-lg" type="text" placeholder="음식 이름" name="food_name">
	</div>
	<hr>
	<div class="container" style="width:250px;">
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="food_ingredients" placeholder="음식 재료"></textarea>
	</div>
	<hr>
	<div class="row text-center" style="width:100%">
		<div style="width: 3-%; float:none; margin:0 auto">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
				<label class="form-check-label" for="inlineCheckbox1">양식</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
				<label class="form-check-label" for="inlineCheckbox2">중식</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2">
				<label class="form-check-label" for="inlineCheckbox3">분식</label>
			</div>
		</div>
	</div>
	<hr>
	<div class="row text-center" style="width:100%">
		<div style="width: 3-%; float:none; margin:0 auto">
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step1</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step1" rows="3"></textarea>
				<select class="custom-select" size="2">
					<option selected>Open this select menu</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select><!--이부분은 자바스크립트로-->
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step2</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step2" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step3</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step3" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step4</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step4" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step5</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step5" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step6</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step6" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step7</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step7" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step8</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step8" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step9</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step9" rows="3"></textarea>
			</div>
			<div class="form-group" id="step">
				<label for="exampleFormControlTextarea1">Step10</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="Step10" rows="3"></textarea>
			</div>
			<button type="submit" id="submit" class="btn btn-success btn-lg btn-block" style="height:50px">레시피 올리기</button>			
		</div>			
	</div>
	
	</div>
	</form>
	

	

</body>
</html>