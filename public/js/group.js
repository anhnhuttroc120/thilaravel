function deleteItem(id) {

	$("#dialog-confirm").dialog({

		resizable : false,
		height : 200,
		modal : true,
		buttons : {
			"Có" : function() {

				$.get('delete/'+id, {id : id	}, function(data) {
					
					$('#item-' + id).hide(200);

				});
				$(this).dialog("close");
			},
			Không : function() {
				$(this).dialog("close");
			}
		}
	});
	
}
$(document).ready(function(){

	$('select[name=shool]').change(function(){
		var school = $(this).val();
		alert(school);
		// $.ajax(url:'select/',
		// 		type:'POST',
		// 		data:{}


		// 	);
	});
});

