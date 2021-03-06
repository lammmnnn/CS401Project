$(document).ready(function(){
	var state_list=$("#state_list")
	for (var state in simplemaps_usmap_mapdata.state_specific){
		var key=state;
		var value=simplemaps_usmap_mapdata.state_specific[state].name;
		 state_list.append($("<option></option>").attr("value",key).text(value));
	}
	state_list.chosen();
	state_list.change(function(){
		var id=$(this).val();
		simplemaps_usmap.state_zoom(id);
	});
})

simplemaps_usmap.hooks.back=function(){
	$("#state_list").val(''); //When you zoom out, reset the select
	$("#state_list").trigger("chosen:updated"); //update chosen
}
