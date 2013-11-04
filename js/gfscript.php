<?php header("Content-type: text/javascript"); ?>
// JavaScript Document
function detele_field(url) {
	if(confirm("Bạn có chắc chắn muốn xóa thông tin này không?")) {
		window.location=url;
	}
}
function docheckall(name,status){
	var objs=document.getElementsByName(name);
	for(i=0;i<objs.length;i++)
		objs[i].checked=status;
	getIDchecked(name);
}
function docheckonce(name){
	var objs=document.getElementsByName(name);
	var flag=true;
	for(i=0;i<objs.length;i++)
		if(objs[i].checked!=true)
		{
			flag=false;
			break;
		}
	document.getElementById("chkall").checked=flag;
	getIDchecked(name);
}
function getIDchecked(name){
	var objs=document.getElementsByName(name);
	var strids="";
	for(i=0;i<objs.length;i++)
		if(objs[i].checked==true)
		{
			strids+=objs[i].value+",";
		}
	document.getElementById("txtids").value=strids;
	activeTr();
}
function activeTr(){
	var Trs=document.getElementsByName("trow");
	for(i=0;i<Trs.length;i++)
	{
		var check=Trs[i].getElementsByTagName("input");
		if(check[0].checked==true)
			Trs[i].className="active";
		else
			Trs[i].className="";
	}
}
function activeLi(){
	var Li=document.getElementsByName("li");
	for(i=0;i<Li.length;i++)
	{
		var check=Li[i].getElementsByTagName("li");
		if(check[0].checked==true)
			Li[i].className="active";
		else
			Li[i].className="";
	}
}
function dosubmitAction(frmID,action){
	if(document.getElementById("txtaction"))
		document.getElementById("txtaction").value=action;
	if(checkinput()==true)
	{
		if(frmID=="frm_action")
		document.getElementById("cmdsave").click();
		else
		document.frm_menu.submit();
	}
}
function saveOrder(){
    var menuids = document.getElementsByName("menuid"); 
	var orders= document.getElementsByName("txtorder");
    var strids ='';
    var strorder ='';
    
    for (var i=0;i<menuids.length;i++) {
        strids  += menuids[i].value+",";
        strorder  += orders[i].value+",";        
    }
    
    document.getElementById("ids_hidden").value = strids;
    document.getElementById("order_hidden").value = strorder;
    document.frm_list.submit();
    
}
function doSave(frmID,action){
	if(document.getElementById("txtaction"))
		document.getElementById("txtaction").value=action;
	if(checkinput()==true)
	{
		if(frmID=="frm_action")
		document.getElementById("cmdsave").click();
		else
		{
		document.frm_menu.submit();
		}
	}
}

function gotopage(page)
{
	document.getElementById("txtCurnpage").value=page;
	document.frmpaging.submit();
}
function openlink(url)
{
	window.location=url;
}
function onsearch(thisitem,type){
	var str=thisitem.value;
	if(type==0 && str=="")
		thisitem.value="Keyword";
	if(type==1)
		thisitem.value="";
}
function cbo_Selected(id,value)
{
	var obj=document.getElementById(id);
	for(i=0;i<obj.length;i++)
		if(obj[i].value==value)
			obj.selectedIndex=i;
}
function OpenPopup(url){
	myWindow=window.open(url,'_blank','width=750,height=400');
}

function openBox(url)
{
	
	var xmlhttp;
	if (url.length==0)
	  {
	  document.getElementById("shopcart").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("shopcart").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}
function checkPhone(phone){
   re=/^[0][1-9][0-9]{8,9}$/;
   if(!re.test(phone.value)){alert("Số điện thoại của bạn không hợp lệ. Số điện thoại chỉ bao gồm số từ 0 đến 9.");return false;}
   return true;
}
function checkField(field,name){
   if(field.value == ""){
      alert(name + ' không được bỏ trống');
      field.focus();
   }
}
function checkEmail(email){
   re=/^(([a-zA-Z0-9])+\.?)*([a-zA-Z0-9])+@(([a-zA-Z0-9])+\.)+[a-zA-Z]{2,4}$/;
   if(!re.test(email.value)){return false;}
   return true;
}

function check_input_dangky() {
	var name   = document.getElementById("name");
	var phone  = document.getElementById("phone");
	var email  = document.getElementById("email");
	var course = document.getElementById("cbo_course");
	var sercur = document.getElementById("txt_security");
	var flag=true;
	$("#msgbox_name").html('').addClass('messageboxerror').fadeTo(600,1);
	$("#msgbox_phone").html('').addClass('messageboxerror').fadeTo(600,1);
	$("#msgbox_email").html('').addClass('messageboxerror').fadeTo(600,1);
	$("#msgbox_course").html('').addClass('messageboxerror').fadeTo(600,1);
	$("#msgbox_sercur").html('').addClass('messageboxerror').fadeTo(600,1);
	
	if(name.value=='') {
		$("#msgbox_name").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Vui lòng nhập họ tên').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	if(sercur.value=='') {
		$("#msgbox_sercur").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Bạn phải điền captcha').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	if(phone.value=='') {
		$("#msgbox_phone").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Vui lòng nhập số điện thoại').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	if (checkPhone(phone)==false) {
		$("#msgbox_phone").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Số điện thoại không hợp lệ').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	if(email.value=='') {
		$("#msgbox_email").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Vui lòng nhập Email').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	if (checkEmail(email)==false) {
		$("#msgbox_email").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Địa chỉ Email không hợp lệ').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	
	if(course.value=='') {
		$("#msgbox_course").fadeTo(200,0.1,function()
		{ 
		  $(this).html('Vui lòng chọn khóa học').addClass('messageboxerror').fadeTo(600,1);
		});
		flag=false;
	}
	
	return flag;
}
