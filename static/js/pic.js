/**
 * 小图滚动
 */
var scrollmove = "";
var masktime = 10;
var focus_cur = 1;	
function change(id){
	clearInterval(scrollmove);
	for (var i = 1; i <= 4; i++) {
		if(i == id){
			$("#smallimg_"+i).attr("class","current");
		}else{
			$("#smallimg_"+i).attr("class","");
		}
	}
	if ((next = id + 1) > 4){
		next = 1;
	}
	focus_cur = id;	
	scrollmove = setInterval("scrollMove("+id+")",masktime);
	
}
function scrollMove(m){
	var p = $("#pic_news li");
	var srl = $("#pic_news").scrollLeft();
	var wrl = $("#word").scrollLeft();
	var dsrl = Math.floor((286*(m-1)-wrl)/5);
	var xsrl = Math.ceil((286*(m-1)-wrl)/5);
	if(wrl > 286*(m-1)){
		$("#pic_news").scrollLeft(srl + dsrl);
		$("#word").scrollLeft(wrl + dsrl);
	}else if(wrl < 286*(m-1)){
		$("#pic_news").scrollLeft(srl + xsrl);
		$("#word").scrollLeft(wrl + xsrl);
	}else{
		clearInterval(scrollmove);
	}
}
/**
 * 大图淡入淡出
 */
var focus_fade = 1;	
var interval;  
function fadetop(id){
	for (var i = 1; i <= 4; i++) {
		if(i == id){
			$("#fading_"+i).attr("class","fading_top");
		}else{
			$("#fading_"+i).attr("class","");
		}
	}
	$("#pic"+focus_fade).stop().animate({opacity: '0'},1000);
	focus_fade = id;
	$("#pic"+focus_fade).stop().animate({opacity: '1'},1000);
	//clearTimeout(interval);  //关闭定时器 
	for (var i = 1; i <= 4; i++) {
		if(i == id){
			$("#pic"+i).attr("class","current_pic");
		}else{
			$("#pic"+i).attr("class","");
		}
	}
	//run(); 
}
$(document).ready(function() {
  //	run();             //加载页面时启动定时器  
});
function run() {  
     interval = setInterval(fadetime, "5000");  
}  
function fadetime() {
	$("#pic"+focus_fade).stop().animate({opacity: '0'},1000);
	if ((focus_fade = focus_fade + 1) > 5){
		focus_fade = 1;
	}
	$("#pic"+focus_fade).stop().animate({opacity: '1'},1000);
		for (var i = 1; i <= 5; i++) {
		if(i == focus_fade){
			$("#fading_"+i).attr("class","fading_top");
		}else{
			$("#fading_"+i).attr("class","");
		}
	}
	clearTimeout(interval);  //关闭定时器 
	run(); 
}