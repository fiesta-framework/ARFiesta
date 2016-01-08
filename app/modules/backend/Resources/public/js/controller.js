$( document ).ready(function() {
	$('.alert').hide();
	$('#mvc').addClass('active');
    $('#new_controller').submit(function () {
		$.post(base+'backend/action',$('#new_controller').serialize(),function(data){
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
