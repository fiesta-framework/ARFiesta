$( document ).ready(function() {
	$('.alert').hide();
	$('#mshema').css({
		"background-color":	 "rgba(0, 0, 0, 0.2)",
		"border-left":		 "2px solid #ffffff",
		"padding-left":		 "28px"
	});
	$(".filetree").treeview({
        animated: "fast",
        collapsed: true,
        unique: true,
        persist: "cookie",
        toggle: function() {
        }
    });
    $('#new_migrate').submit(function () {
		$.post(base+'backend/action',$('#new_migrate').serialize(),function(data){
			var response = data;
            if(response['statut'] =="success"){
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
            }else{
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
			}
        });
        //
        return false;
    });
	$('#exec_last_migrate').submit(function () {
		$.post(base+'backend/action',$('#exec_last_migrate').serialize(),function(data){
			var response = data;
            if(response['statut'] =="success"){
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
            }else{
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
			}
        });
        //
        return false;
    });
});
