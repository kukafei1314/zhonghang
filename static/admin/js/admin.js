function parent_hold(id){
	for (var i = 1; i <= 4; i++) {
		if(i == id){
			$("#parent_"+i).addClass("current");
		}else{
			$("#parent_"+i).removeClass();
		}
	}
}