// JavaScript Document

function upload_ajax($obj) {
	var uid = $obj.siblings(".uid").val();
	var tid = $obj.siblings(".tid").val();
	$.ajax({  
        type: "POST",     
        url: "upload_count",      
        data: {uid:uid,tid:tid},
        success: function(data){
			if(data != 1) {
				return false;
			}
        }            
    });
}
$(document).ready(function() {
	$("#top_nav_out").toggle(
	  function () {
			$(".leftNavi").animate({left: '+0px'}, "fast");
			$(".list_right").animate({left: '+200px'}, "fast");
			$(".top_second").animate({left: '+200px'}, "fast");
			$("#bottom_div").animate({left: '+200px'}, "fast");
	  },
	  function () {
			$(".leftNavi").animate({left: '-200px'}, "fast");
			$(".list_right").animate({left: '0px'}, "fast");
			$(".top_second").animate({left: '0px'}, "fast");
			$("#bottom_div").animate({left: '0px'}, "fast");
	  }
	);

	$("#popmenu").click(function(e) {
		if(!$("#top_nav").attr("class","hide_div")) {
			$("#top_nav").addClass("hide_div");
		} else {
			$("#top_nav").removeClass("hide_div");
		}
		e.stopPropagation();
	});
	$("#contentall").click(function() {
		if(!$("#top_nav").attr("class","hide_div")) {
			$("#top_nav").addClass("hide_div");
		}
	});
});