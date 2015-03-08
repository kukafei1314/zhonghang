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
	//alert(m);
	var p = $("#pic li");
	var srl = $("#pic").scrollLeft();
	//alert(srl);
	var dsrl = Math.floor((p.width()*(m-1)-srl)/5);
	var xsrl = Math.ceil((p.width()*(m-1)-srl)/5);
	if(srl > p.width()*(m-1)){
		$("#pic").scrollLeft(srl + dsrl);
		$("#word").scrollLeft(srl + dsrl);
	}else if(srl < p.width()*(m-1)){
		$("#pic").scrollLeft(srl + xsrl);
		$("#word").scrollLeft(srl + xsrl);
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
	for (var i = 1; i <= 5; i++) {
		if(i == id){
			$("#fading_"+i).attr("class","fading_top");
		}else{
			$("#fading_"+i).attr("class","");
		}
	}
	$("#pic"+focus_fade).stop().animate({opacity: '0'},1000);
	focus_fade = id;
	$("#pic"+focus_fade).stop().animate({opacity: '1'},1000);
	clearTimeout(interval);  //关闭定时器 
	run(); 
}
$(document).ready(function() {
  	run();             //加载页面时启动定时器  
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