$(document).ready(function (){
    $('#menu_icon').click(function () {
    	if($( "#side_bar" ).hasClass( "side_bar_full" ))
    	{
    		$('#menu_icon').removeClass("menu_icon_holded");
    		$('#side_bar').removeClass("side_bar_full");
    		$('#tab_schema').removeClass("main_panel_mini");
    		$('#tab_links').removeClass("main_panel_mini");
    		$('#tab_langs').removeClass("main_panel_mini");
    		$('#tab_mvc_m').removeClass("main_panel_mini");
    		$('#tab_mvc_v').removeClass("main_panel_mini");
    		$('#tab_mvc_c').removeClass("main_panel_mini");
    		$('#tab_seeds').removeClass("main_panel_mini");
    		$('#tab_info').removeClass("main_panel_mini");
    	}
        else
        {
        	$('#menu_icon').addClass("menu_icon_holded");
        	$('#side_bar').addClass("side_bar_full");
        	$('#tab_schema').addClass("main_panel_mini");
        	$('#tab_links').addClass("main_panel_mini");
        	$('#tab_langs').addClass("main_panel_mini");
        	$('#tab_mvc_m').addClass("main_panel_mini");
			$('#tab_mvc_v').addClass("main_panel_mini");
			$('#tab_mvc_c').addClass("main_panel_mini");
        	$('#tab_seeds').addClass("main_panel_mini");
        	$('#tab_info').addClass("main_panel_mini");
        }
    });


});