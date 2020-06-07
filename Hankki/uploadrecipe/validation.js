/*********************************************************************
 * Test case
 * 	음식 제목
 * 		1.아무것도 입력 안하는 경우
 * 		2.한글, 영문 이외의 특수문자나 숫자를 입력하는 경우
 * 		3.10자 이상을 넘기는 경우
 * 		4.공백문자만 넣는 경우
 * 
 * 	음식 재료
 * 		1.한글, 영문, 숫자 이외의 특수문자를 입력하는 경우
 * 		2.120자 이상을 넘기는 경우
 * 		3.공백문자로 시작하는 경우
 * 		4.공백문자만 넣는 경우
 * 
 * 	체크 박스
 * 		1.체크를 안 한 경우
 * 
 * 	레시피(06/07 작업 중)
 * 		1.아무것도 입력 안한경우
 * 		2.공백만 입력 한 경우
 * 		3.시/분/초에 문자가 들어간 경우
 *  
 *********************************************************************/
function CheckValidation(){

	var i = 1;//제어 변수
	var title = document.getElementById("food_name");
	var ingredients = document.getElementById("food_ingredients");
	var parent_div = document.getElementById("step");
	var child_tag = parent_div.childNodes; 
	var descent_tag;
	var descent_tag2;
	var tmp;
	
	const kor_eng = /^[a-z|A-Z|ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
	const kor_eng_num = /^[0-9|a-z|A-Z|ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
	const only_number = /^[0-9]/;
	const only_space = /^\s+$/;
	

	
	if(title.value == "" || title.value.length == 0 || only_space.test(title.value)){
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
	
	
	if(ingredients.value == "" || ingredients.value.length == 0 || only_space.test(ingredients.value)){
		alert("음식 재료를 입력 해 주세요!");
		ingredients.select();
		ingredients.focus();
		return false;
	}
	
	if(!kor_eng_num.test(ingredients.value)){
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
	
	
	for(var i = 0; i < child_tag.length; i++){//각 레시피 단계가 있는 div tag 찾기
		if(child_tag[i].nodeName != "DIV")continue;
			
		descent_tag = child_tag[i].childNodes;
			
			
		for(var j = 0; j < descent_tag.length; j++){//textarea랑 시분초 input tag 찾기
			//alert(descent_tag[j].nodeName);
				
			if(descent_tag[j].nodeName == "TEXTAREA"){//하나의 레시피 단계의 textarea 검증
				tmp = descent_tag[j];
				if(tmp.value == "" || tmp.value.length == 0 || only_space.test(tmp.value)){
					alert("요리 레시피를 입력해주세요!");
					tmp.select();
					tmp.focus();
					return false;
				}
			}
				
			if(descent_tag[j].nodeName == "DIV"){
				descent_tag2 = descent_tag[j].childNodes;//NodeList type으로 return 해야 자식 태그에 접근가능	
					
				for(var k = 0; k < descent_tag2.length; k++){
					//alert(descent_tag2[k].nodeName);
						
					if(descent_tag2[k].nodeName != "INPUT")continue;
					//alert(descent_tag2[k].nodeName);
						
					tmp = descent_tag2[k];
					if(!only_number.test(tmp.value)){
						alert("시/분/초는 숫자만 입력 해 주세요!");
						tmp.select();
						tmp.focus();
						return false;
					}						
				}
			}				
		}		
	}


	return false;
	
}


