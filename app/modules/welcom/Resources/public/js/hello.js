$( document ).ready(function() {


	var Timer1;
	var Timer2;

	// var Timer1 = setInterval(function(){ fade1() }, 1000);
	// var Timer2 = setInterval(function(){ fade2() }, 1500);

	function fade1 () 
	{
		$( "#welcom" ).fadeTo( "slow", 1 );
		clearInterval(Timer1);
	}

	function fade2 () 
	{
		$( "#bottom_panel" ).fadeTo( "slow", 1 );
		clearInterval(Timer2);
	}

	function fade3 () 
	{
		$( "#hello_logo" ).fadeTo( "slow", 1 );
		clearInterval(Timer3);
	}

	$('#form_1').submit(function () {
		$.post(baselinks+'welcom/show/1',$('#form_1').serialize(),function(data){
                if(data=="ok"){
					$("#dev_nom").html($("#dev_nom").val());
                	$( "#etap_1" ).fadeOut( 300, function(){
						$( "#etap_2" ).fadeIn( 300 ); 
					});
                }
                else alert('Un erreur est survenue');
        });
        //
        return false;
    });

    $('#form_2').submit(function () {
		$.post(baselinks+'welcom/show/2',$('#form_2').serialize(),function(data){
                if(data=="ok")
                {
                	$( "#etap_2" ).fadeOut( 300, function(){ $( "#etap_3" ).fadeIn( 300 ); } );
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });

    $('#form_3').submit(function () {
		$.post(baselinks+'welcom/show/3',$('#form_3').serialize(),function(data)
            {
                if(data=="ok")
                {
                	$( "#etap_3" ).fadeOut( 300, function(){ $( "#etap_4" ).fadeIn( 300 ); } );
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });

    $('#form_4').submit(function () {
		$.post(baselinks+'welcom/show/4',$('#form_4').serialize(),function(data){
                if(data=="ok"){
					location.href = baselinks+"backend";
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });
});
