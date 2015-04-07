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
			$(".top_title").animate({left: '+200px'}, "fast");
			$("#bottom_div").animate({left: '+200px'}, "fast");
	  },
	  function () {
			$(".leftNavi").animate({left: '-200px'}, "fast");
			$(".list_right").animate({left: '0px'}, "fast");
			$(".top_title").animate({left: '0px'}, "fast");
			$("#bottom_div").animate({left: '0px'}, "fast");
	  }
	);
	$("#popmenu").click (function() {
			$(".top_nav").show();
		}
	)
	$(document).bind("click",function(e){ 
		var target = $(e.target); 
		if(target.closest("#popmenu").length == 0){ 
			$(".top_nav").hide(); 
		} 
	});
});