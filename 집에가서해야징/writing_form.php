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
	
	
</script>


<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Insert title here</title>
</head>
<body>
	<div class="container" style="width:50%">
		<img src="default.jpg" alt="..." class="img-thumbnail">
		
		<form action="request.php" method="post" enctype="multipart/form-data">
    	Thumbnail : 
    	<input type="file" name="imagefile" id="fileToUpload">
    	
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
		<div class="container" style="width:50%;">
			
	
	
	
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
	</div>
	
	

	

</body>
</html>