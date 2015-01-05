/**
 * 
 */
var scrollmove = "";
var masktime = 10;
var focus_cur = 1;	

/*var h = document.getElementById("tip").getElementsByTagName("li");*/
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
	
	scrollmove = setInterval("scrollMove("+id+")",masktime);
	focus_cur = id;

}
function scrollMove(m){
	var p = $("#pic li");
	alert(p.width());
	var srl = $("#pic").scrollLeft();
	var dsrl = Math.floor((p.width()*(m-1)-srl)/5);
	var xsrl = Math.ceil((p.width()*(m-1)-srl)/5);
	if(srl > p.width()*(m-1)){
		$("#pic").scrollLeft(srl + dsrl);
	}else if(srl < p.width()*(m-1)){
		$("#pic").scrollLeft(srl + xsrl);
	}else{
		clearInterval(scrollmove);
	}
}
