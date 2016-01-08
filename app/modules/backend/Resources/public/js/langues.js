$( document ).ready(function() {
	$('.alert').hide();
	$('#mlang').css({
		"background-color":	 "rgba(0, 0, 0, 0.2)",
		"border-left":		 "2px solid #ffffff",
		"padding-left":		 "28px"
	});
    $('#new_lang_dir').submit(function () {
		$.post(base+'backend/action',$('#new_lang_dir').serialize(),function(data){
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
	$('#new_lang_file').submit(function () {
		$.post(base+'backend/action',$('#new_lang_file').serialize(),function(data){
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
