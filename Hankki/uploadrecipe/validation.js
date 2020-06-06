
function CheckValidation(){

	var i = 1;//제어 변수
	var title = document.getElementById("food_name");
	var ingredients = document.getElementById("food_ingredients");
	var counsumed_time = document.getElementById("time");
	var price = document.getElementById("price");
	alert(stepcount);
	if(title.value == ""){
		alert("요리 제목을 입력 해 주세요!");
		title.select();
		title.focus();
		return false;
	}
	
	if(ingredients.value == ""){
		alert("음식 재료를 입력 해 주세요!");
		ingredients.select();
		ingredients.focus();
		return false;
	}
	
	if(receipe_form.time[0] == false && receipe_form.time[0] == false && receipe_form.time[1] == false && receipe_form.time[2] == false){
		alert("총 요리 소요 시간을 선택 해 주세요!");
		return false;	
	}
	
	if(receipe_form.price[0] == false && receipe_form.price[1] == false && receipe_form.price[2] == false && receipe_form.price[3] == false){
		alert("레시피 가격대를 선택 해 주세요!");
		return false;
	}

	if(receipe_form.food_type[0] == false && receipe_form.food_type[1] == false && receipe_form.food_type[2] == false && receipe_form.food_type[3] == false){
		alert("음식 유형(양식/ 중식/ 한식/ 일식)을 선택 해 주세요!");
		return false;
	}
	
	/*
	while(i <= stepcount){
		var receipe_context = document.getElementById("Step" + i);
		var 
		
	}
	*/

	//document.newProduct.submit("Step" + i);
	return false;
	
}
