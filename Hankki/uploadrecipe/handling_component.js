var stepcount = 0;
var receipe = new Array();

function addStep(current) {
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
	del_btn.setAttribute('id', stepcount + 1);
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
	time_hour.setAttribute('value', '0');
	time_hour.setAttribute('placeholder', '0');
	time_hour.setAttribute('aria-describedby', 'basic-addon2');

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
	time_min.setAttribute('value', '0');
	time_min.setAttribute('placeholder', '0');
	time_min.setAttribute('aria-describedby', 'basic-addon2');

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
	time_sec.setAttribute('value', '0');
	time_sec.setAttribute('placeholder', '0');
	time_sec.setAttribute('aria-describedby', 'basic-addon2');

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

function deleteStep(current) {
	var tmp_obj = "Step_div" + current;
	var target = document.getElementById(tmp_obj);
	target.remove();
}

/*
 function upload(){
 document.board_form.action = "upload.php";
 document.board_form.submit();

 document.board_form.action = "request.php";
 document.board_form.submit();
 }
 */

