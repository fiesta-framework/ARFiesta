$( document ).ready(function() {
	$('.alert').hide();
	var updateOutput = function(e){
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.text(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.text('JSON browser support required for this demo.');
        }
    };
	updateOutput($('#menuDragAndDrop').data('output', $('#resultat')));
	$('#menuDragAndDrop').nestable({
        group: 1
	}).on('change', updateOutput);
	
	$('#settingMenu,#toute,#topcat,#art_toute,#art_topcat,#cat_toute,#cat_topcat input').iCheck({
		checkboxClass: 'icheckbox_flat-green'
    });

	var getData = function(e){
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            return window.JSON.stringify(list.nestable('serialize'));//, null, 2));
        } else {
            return 'JSON browser support required for this demo.';
        }
    };
	var SetContent = function(title,name,id){
		return '<div id="'+name+'_'+id+'" style="display:block"><div class="dd3-content" style="padding: 2%;padding-bottom: 4%;background: #ffffff;margin-top: -5px;border-top: 0px;height: auto;">'+'<form method="post" action="#" id="savecurrentmenu"><div class="form-group"><i style="font-weight: 400;">Titre de la navigation</i><input type="text" value="'+title+'" placeholder="Titre" name="self_menu_title" class="form-control">'+'</div><div class="form-group"><i  style="font-weight: 400;">Attribut de titre</i><input type="text" placeholder="Attribut" name="self_menu_attribut" class="form-control">'+'</div><!--<div class="form-group"><i  style="font-weight: 400;">Description</i><textarea  name="self_menu_description" class="form-control" rows="4" cols="50" style="height: 20% !important;"></textarea>'+'<p>La description sera affichée dans le menu si le thème actuel l’accepte.</p></div>--><a style="color:red" data-id="'+id+'" id="delete" href="#">Supprimer</a>'+'<span class="meta-sep hide-if-no-js"> | </span><a id="cancel" href="#"><u>Annuler</u></a><button class="btn btn-success pull-right" type="submit">Enregistrer</button><input type="hidden" name="self_menu_id" value="'+id+'"/></form></div></div>'
	};
	$("div.contentmenu").on("submit", 'form#savecurrentmenu', function(e){ 
		e.preventDefault();		
		console.log($(this).serialize());
	});
	$("div.contentmenu").on("click", 'a#delete', function(e){ 
		e.preventDefault();		
		$("div.contentmenu").html("");
		$("div.contentmenu").css('display', 'none');
		$("li[data-id='"+$(this).attr('data-id')+"']").remove().fadeOut( "slow" );
	});
	$("div.contentmenu").on("click", 'a#cancel', function(e){ 
		e.preventDefault();		
		$("div.contentmenu").html("");
		$("div.contentmenu").css('display', 'none');
	});
	
	$('.editMenu').on('click', function(e) {
		e.preventDefault();
		if($(this).parent().parent().next()[0]){		
			$(this).closest("div").next().toggle();
			if ($(this).closest("div").next().css('display') == 'block') {
                $(this).closest("div").next().append(SetContent($(this).attr("data-title"),"Test",$(this).attr("data-id")));
            } else {
                $(this).closest("div").next().html("");
            }
		}else if($(this).parent().parent().parent().next()[0]){
			$(this).closest("li").next().toggle();
			if ($(this).closest("li").next().css('display') == 'block') {
                $(this).closest("li").next().append(SetContent($(this).attr("data-title"),"Test",$(this).attr("data-id")));
            } else {
                $(this).closest("li").next().html("");
            }
		}
	});
	 $('#SaveData').on('submit', function(e) {
        e.preventDefault();
		var RES 	= getData($('#menuDragAndDrop').data('output', $('#resultat')));
		var RESDATA = window.JSON.stringify($('#SaveData').serialize());
		$.post(base+'page/addmenu',{json: RES, data: RESDATA},function(response){
			if(response['statut'] =="success"){
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
            }else{
				// $('.alert').show();
				// $('#messageIcon').addClass(response['icon']);
				// $('#message').html(response['Message']);
				console.log(response)
			}
        });
    });
	$('#add_new').on("click", function(e){ 
		e.preventDefault();
		$("#listeMenus").html("");
		$("#big_menu").val("");
		$("#id_menu").val("null");
		$("#action_menu").val("add");
    });
	$('#listeMenus').on("click", "a", function(){ 
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).slideToggle(function() {
            if ($(this).css('display') == 'block') {
                toggle_switch.html('<span class="entypo-up-open"></span>');
            } else {
                toggle_switch.html('<span class="entypo-down-open"></span>');
            }
        });
        return false;
    });
	
	$('#toute,#topcat input').on('ifChecked', function(event){
		$("button#addToMenuPage").removeAttr("disabled");
	});
	$("#art_toute,#art_topcat input").on('ifChecked', function(event){
		$("button#addToMenuArticle").removeAttr("disabled");
	});

	//add page to menu 
	$('#addToMenuLink').on('click', function(){
		var id = Math.floor(Math.random()*100000), title = $("#inputElementMenu").val(), Menulink = $("#inputLink").val();
			$('#listeMenus').append('<li class="dd-item dd3-item" data-id="'+id+'"><div class="dd-handle dd3-handle">Drag</div>'+
			'<div class="dd3-content">'+title+'<span class="pull-right"><span style="font-size: 12px;">Lien personalisé</span>&nbsp;'+
			'<a class="nav-toggle-alt" href="#'+name+'_'+id+'" style="color: #757575;"><span class="entypo-down-open"></span></a></span></div></li>');
		$.post(base+'page/action/addpage',{
			titre:			title,
			slug:			title,
			link:			Menulink,
			content:		"",
			post_status:	"publish",
			visibilite:		"",
			date:			"",
			parent:			0,
			type:			"nav_menu_item",
			model:			""			
		},function(response){
			if(response['statut'] =="success"){
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
            }else{
				$('.alert').show();
				$('#messageIcon').addClass(response['icon']);
				$('#message').html(response['Message']);
				// console.log(response)
			}
        });
	});
	//add page to menu 
	$('#addToMenuPage').on('click', function(){
		$("input:checkbox[name=allpage]:checked, input:checkbox[name=recentpage]:checked").each(function(){
			var id = $(this).val(), title = $(this).attr("data-title"), name = $(this).attr("data-name");
			$('#listeMenus').append('<li class="dd-item dd3-item" data-id="'+id+'"><div class="dd-handle dd3-handle">Drag</div>'+
			'<div class="dd3-content">'+title+'<span class="pull-right"><span style="font-size: 12px;">Lien personalisé</span>&nbsp;'+
			'<a class="nav-toggle-alt" href="#'+name+'_'+id+'" style="color: #757575;"><span class="entypo-down-open"></span></a></span></div></li>');
			$(this).iCheck('disable');
		});
		$('#toute,#topcat input').iCheck('uncheck');
		$("button#addToMenuPage").attr("disabled", "disabled");
	});
	//add article to menu 
	$('#addToMenuArticle').on('click', function(){
		$("input:checkbox[name=allarticle]:checked, input:checkbox[name=recentarticle]:checked").each(function(){
			var id = $(this).val(), title = $(this).attr("data-title"), name = $(this).attr("data-name");
			$('#listeMenus').append('<li class="dd-item dd3-item" data-id="'+id+'"><div class="dd-handle dd3-handle">Drag</div>'+
			'<div class="dd3-content">'+title+'<span class="pull-right"><span style="font-size: 12px;">Lien personalisé</span>&nbsp;'+
			'<a class="nav-toggle-alt" href="#'+name+'_'+id+'" style="color: #757575;"><span class="entypo-down-open"></span></a></span></div></li>');
			$(this).iCheck('disable');
		});
		$('#art_toute,#art_topcat input').iCheck('uncheck');
		$("button#addToMenuArticle").attr("disabled", "disabled");
	});
});
