jQuery(document).ready(function (){
	//editor
	head.js(base+"public/assets/libs/ckeditor/ckeditor.js", function() {
		CKEDITOR.replace('texteditor',{
            filebrowserBrowseUrl : 		base+'public/assets/libs/ckeditor/finder/index.php?editor=ckeditor',
            filebrowserImageBrowseUrl : base+'public/assets/libs/ckeditor/finder/index.php?editor=ckeditor&filter=image',
            filebrowserFlashBrowseUrl : base+'public/assets/libs/ckeditor/finder/index.php?editor=ckeditor&filter=flash',
        });
	});
	jQuery('#cms').addClass('active');
	jQuery('#cms2').addClass('active');
	jQuery("#btnDate_creation").click(function(event){
		event.preventDefault();
		jQuery('#date_creation').toggle("slow");
	});
	jQuery("#btnVisibilite").click(function(event){
		event.preventDefault();
		jQuery('#visibilite').toggle("slow");
	});
	jQuery("#btnEtat").click(function(event){
		event.preventDefault();
		jQuery('#etat').toggle("slow");
	});

	jQuery('#etat').hide();
	jQuery('#visibilite').hide();
	jQuery('#date_creation').hide();
	jQuery('#password').hide();
	
	jQuery('#visibilite input').on('ifChecked', function(event){
		if(jQuery(this).val() === "password"){
			jQuery('#password').toggle("slow");
		}else{
			jQuery('#password').hide("slow");
		}
	});
	
	jQuery('#visibilite  input').iCheck({
        radioClass: 'iradio_flat-blue'
    });
	$('#datetimepicker1').datetimepicker({
        language: 'fr-FR'
    });
	
	jQuery('.save-draft').click(function() {
            var itm = jQuery(this);
            if (itm.hasClass('disable')) {
                itm.attr('disabled', 'disabled');
            }
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;
            var interval = setInterval(function() {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 0.5;
                if (clock > 100) {
                    itm.removeAttr('disabled');
                    clearInterval(interval);
                    bar.progressbutton('reset');
					alert("Success")
                }
            }, 30);
    });
	jQuery('.alert').hide();
	jQuery('#addpage').on('submit', function(e) {
        e.preventDefault();
		for( instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}
		$.post(base+'page/action/addpage',$('#addpage').serialize(),function(response){
			$('.alert').show();
			$('#messageIcon').addClass(response['icon']);
			$('#message').html(response['Message']);
        });
    });
});