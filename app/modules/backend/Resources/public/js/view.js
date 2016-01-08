$( document ).ready(function() {
	$('.alert').hide();
	$('#mvc').addClass('active');
	$(".filetree").treeview({
        animated: "fast",
        collapsed: true,
        unique: true,
        persist: "cookie",
        toggle: function() {
			//window.console && console.log("%o was toggled", this);
        }
    });
    $('#new_view').submit(function () {
		$.post(base+'backend/action',$('#new_view').serialize(),function(data){
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
