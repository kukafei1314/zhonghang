function parent_hold(id){
	$(".current").removeClass();
	for (var i = 1; i <= 4; i++) {
		if(i == id){
			$("#parent_"+i).addClass("current");
		}else{
			$("#parent_"+i).removeClass();
		}
	}
}

function child_hold(id){
	$(".current").removeClass();
	for (var i = 1; i <= 12; i++) {
		if(i == id){
			$("#child_"+i).addClass("current");
		}else{
			$("#child_"+i).removeClass();
		}
	}
}

$(document).ready(function(e) {
    $(".parent_none").click(function(){
		for (var i = 1; i <= 4; i++) {
			$("#parent_"+i).removeClass();
		}
	});
});