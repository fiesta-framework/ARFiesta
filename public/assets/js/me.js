$(document).ready(function (){
	var panelFolder = "/Arframework";
    function msg (msg) {
        //alert(msg);
        var msg_span=document.getElementById('alert_msg');
        msg_span.innerHTML=msg;
        //document.getElementById('alert_unit').style.display="block";
        $( "#alert_unit" ).fadeIn("fast");
    }

     $('#alert_close').click(function () {
        // document.getElementById('alert_unit').style.display="none";
        $( "#alert_unit" ).fadeOut("fast");
    });

	$('#new_migrate').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_migrate').serialize(),function(data){
            msg(data);
        }).fail(function(e) {
			console.log( e.responseText );
		});
        //
        return false;
    });

    $('#exec_last_migrate').submit(function () {
        $.post(panelFolder+'/backend/action',$('#exec_last_migrate').serialize(),function(data){
            msg(data);
			if(data == "Schéma annulé")
				$('#dropshema').attr('checked', false);
        }).fail(function(e) {
			console.log( e.responseText );
		});
        //
        return false;
    });

    $('#exec_cos_migrate').submit(function () {
        $.post(panelFolder+'/backend/action',$('#exec_cos_migrate').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#rollback_cos_migrate').submit(function () {
        $.post(panelFolder+'/backend/action',$('#exec_cos_migrate').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#new_link').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_link').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#new_seed').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_seed').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#run_seed').submit(function () {
        $.post(panelFolder+'/backend/action',$('#run_seed').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#new_lang_dir').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_lang_dir').serialize(),function(data)
            {
                msg(data);
                if(data=="okey") $('#new_lang_dir').reset();
            });
        //
        return false;
    });

    $('#new_lang_file').submit(function () {
        if(document.getElementById('lang_file_name').value!="")
        {
            $.post(panelFolder+'/backend/action',$('#new_lang_file').serialize(),function(data)
            {
                //msg(data);
                msg(data);
                //if(data=="okey") $('#new_lang_file').reset();
            });
        }
        else
        {
            msg('vous devez ajouter le nom de fichier');
        }
        
        //
        return false;
    });

    $('#new_models').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_models').serialize(),function(data){
            msg(data);
        }).fail(function(e) {
			console.log( e.responseText );
		});
        //
        return false;
    });

    $('#new_view').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_view').serialize(),function(data){
            msg(data);
        }).fail(function(e) {
			console.log( e.responseText );
		});
        //
        return false;
    });

    $('#new_controller').submit(function () {
        $.post(panelFolder+'/backend/action',$('#new_controller').serialize(),function(data){
            msg(data);
        }).fail(function(e) {
			console.log( e.responseText );
		});
        return false;
    });
});