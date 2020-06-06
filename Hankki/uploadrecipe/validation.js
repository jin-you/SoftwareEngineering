/*********************************************************************
 * Test case
 * 	음식 제목
 * 		1.아무것도 입력 안하는 경우
 * 		2.한글, 영문 이외의 특수문자나 숫자를 입력하는 경우
 * 		3.10자 이상을 넘기는 경우
 * 		4.공백문자로 시작하는 경우
 * 		5.공백문자만 넣는 경우
 * 
 * 	음식 재료
 * 		1.한글, 영문, 숫자 이외의 특수문자를 입력하는 경우
 * 		2.120자 이상을 넘기는 경우
 * 		3.공백문자로 시작하는 경우
 * 		4.공백문자만 넣는 경우
 * 
 * 
 * 
 * 
 *********************************************************************/
function nullcharcheck(str){

	
	var i;
	for(i = 0; i < str.length; i++){
		if(str.charAt[i] != " "){
			return true;
		}
	}
	return false;
	//공백 문자만 들어온경우 처리중
}

function CheckValidation(){

	var i = 1;//제어 변수
	var title = document.getElementById("food_name");
	var ingredients = document.getElementById("food_ingredients");
	
	const kor_eng = /^[a-z|A-Z|ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
	const kor_eng_num = /^[0-9|a-z|A-Z|ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
	
	

	if(title.value == "" || title.value.length == 0 || nullcharcheck(title.value) == false){
		alert("요리 제목을 입력 해 주세요!");
		title.select();
		title.focus();
		return false;
	}
	
	if(title.value.length > 10){
		alert("요리 제목은 10자를 넘을 수 없습니다!")
		title.select();
		title.focus();
		return false;
	}
	
	if(!kor_eng.test(title.value)){
		alert("음식 제목은 영문 또는 한글만 입력 해 주세요!");
		title.select();
		title.focus();
		return false;
	}
	
	
	if(ingredients.value == "" || ingredients.value.length == 0){
		alert("음식 재료를 입력 해 주세요!");
		ingredients.select();
		ingredients.focus();
		return false;
	}
	
	if(!kor_eng_num.text(ingredients.value)){
		alert("음식 재료는 한글, 영문, 숫자만 입력 해 주세요!");
		ingredients.select();
		ingredients.focus();
		return false;
	}
	
	if(ingredients.value.length > 120){
		alert("음식 재료는 120자 이하만 입력 해 주세요!");
		ingredients.select();
		ingredients.focus();
		return false;
	}
	
	if(receipe_form.time[0].checked == false && receipe_form.time[1].checked  == false && receipe_form.time[2].checked  == false && receipe_form.time[3].checked  == false){
		alert("총 요리 소요 시간을 선택 해 주세요!");
		return false;	
	}
	
	if(receipe_form.price[0].checked == false && receipe_form.price[1].checked == false && receipe_form.price[2].checked == false && receipe_form.price[3].checked == false){
		alert("레시피 가격대를 선택 해 주세요!");
		return false;
	}

	if(receipe_form.food_type[0].checked == false && receipe_form.food_type[1].checked == false && receipe_form.food_type[2].checked == false && receipe_form.food_type[3].checked == false){
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


