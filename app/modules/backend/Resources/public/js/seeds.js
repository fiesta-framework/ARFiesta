$( document ).ready(function() {
	$('.alert').hide();
	$('#mseeds').css({
		"background-color":	 "rgba(0, 0, 0, 0.2)",
		"border-left":		 "2px solid #ffffff",
		"padding-left":		 "28px"
	});
    $('#new_seed').submit(function () {
		$.post(base+'backend/action',$('#new_seed').serialize(),function(data){
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
	$('#exec_seed').submit(function () {
		$.post(base+'backend/action',$('#exec_seed').serialize(),function(data){
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
