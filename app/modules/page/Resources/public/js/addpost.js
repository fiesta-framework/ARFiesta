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
	jQuery('#cms3').addClass('active');
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
	
	jQuery('#imageBlock').hide();
	jQuery('#videoBlock').hide();
	jQuery('#audioBlock').hide();
	
	jQuery('#visibilite input').on('ifChecked', function(event){
		if(jQuery(this).val() === "password"){
			jQuery('#password').toggle("slow");
		}else{
			jQuery('#password').hide("slow");
		}
	});
	
	var gerformImage = function(){
		return '<div class="nest"><div class="title-alt"><h6><span class="icon icon-document-new"></span> Format Image</h6></div><div class="body-nest" id="addimage">'+
		'<!--<form action="assets/js/dropZone/upload" class="dropzone" id="my-dropzone"></form>--><button style="margin-top:10px;" class="btn btn-info" id="submit-all">Soumettre tous les fichiers</button></div></div>';
	}
	var gerformVideo = function(){
		return '<div class="nest"><div class="title-alt"><h6><span class="icon icon-document-new"></span> Format Video</h6></div><div class="body-nest" id="addvideo">'+
        '<div class="well"><div class="form-group"><label for="VideoID">Video Type</label><br/><br/><div class="skin skin-flat" id="videoType"><ul class="list" style="padding-left: 0px;">'+'<li><input tabindex="11" type="radio" name="video_type" value="youtube" checked><label for="square-radio-1" style="font-weight: 500;top: 0px;"><span class="entypo-video"></span> Youtube </label></li><li><input tabindex="12" value="vimeo" type="radio" name="video_type"><label for="square-radio-2" style="font-weight: 500;top: 0px;"><span class="entypo-vimeo"></span> Vimeo </label>'+
		'</li></ul><div style="clear:both;"></div></div></div><div class="form-group"><label for="VideoID">Video ID</label><br/>Add the video id <input type="text" name="videoid" class="form-control" style="margin-top: 1%;"></div></div></div></div>';
	}
	var gerformSong = function(){
		return '<div class="nest"> <div class="title-alt"> <h6><span class="icon icon-document-new"></span> Format Audio</h6> </div> <div class="body-nest" id="addaudio"> <div class="well"><div class="form-group"> <label for="VideoID">Audio Type</label><br/><br/> <div class="skin skin-flat" id="audioType"><ul class="list" style="padding-left: 0px;"><li><input type="radio" name="audio_type" value="soundcloud" checked><label for="square-radio-1" style="font-weight: 500;top: 0px;"><span class="entypo-soundcloud"></span> Soundcloud </label></li></ul><div style="clear:both;"></div></div> </div> <div class="form-group"> <label for="VideoID">Audio ID</label><br/>Add the audio id <input type="text" name="audioid" class="form-control" style="margin-top: 1%;"> </div> </div> </div> </div>';
	}	

	jQuery('#Format input').on('ifChecked', function(event){
		if(jQuery(this).val() === "image"){
			jQuery('#imageBlock').show("slow");
			jQuery('#audioBlock').hide("slow");
			jQuery('#videoBlock').hide("slow");
			$("#imageBlock").html(gerformImage());
			$("#videoBlock").html("");
			$("#audioBlock").html("");
		}else if(jQuery(this).val() === "video"){
			jQuery('#audioBlock').hide("slow");
			jQuery('#imageBlock').hide("slow");
			jQuery('#videoBlock').show("slow");
			$("#imageBlock").html("");
			$("#videoBlock").html(gerformVideo());
			$("#audioBlock").html("");
		}else if(jQuery(this).val() === "audio"){
			jQuery('#audioBlock').show("slow");
			jQuery('#imageBlock').hide("slow");
			jQuery('#videoBlock').hide("slow");
			$("#imageBlock").html("");
			$("#videoBlock").html("");
			$("#audioBlock").html(gerformSong());
		}else{
			jQuery('#imageBlock').hide("slow");
			jQuery('#audioBlock').hide("slow");
			jQuery('#videoBlock').hide("slow");
			$("#imageBlock").html("");
			$("#videoBlock").html("");
			$("#audioBlock").html("");
		}
	});
	
	jQuery('#visibilite,#Format,#categorie,#videoType,#audioType  input').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });
	$('#datetimepicker1').datetimepicker({
        language: 'fr-FR'
    });
	jQuery('#tags_2').tagsInput({
        width: 'auto',
        onChange: function(elem, elem_tags) {
            var languages = ['php', 'ruby', 'javascript'];
            jQuery('.tag', elem_tags).each(function() {
                if ($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
                    $(this).css('background-color', '#FBB44C');
            });
        }
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
	jQuery('#addPagearticle').on('submit',function(e){
		for( instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}
		jQuery.post(base+'page/action/addarticle',jQuery('#addPagearticle').serialize(),function(response){
			jQuery('.alert').show();
			jQuery('#messageIcon').addClass(response['icon']);
			jQuery('#message').html(response['Message']);
			console.log(response);
        });
		e.preventDefault();
    });
	//images
	Dropzone.options.myDropzone = {
        autoProcessQueue: false,
        init: function() {
            var submitButton = document.querySelector("#submit-all")
            myDropzone = this; // closure
            submitButton.addEventListener("click", function() {
                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
            });
            this.on("addedfile", function() {
                // Show submit button here and/or inform user to click it.
            });
        }
    };
});