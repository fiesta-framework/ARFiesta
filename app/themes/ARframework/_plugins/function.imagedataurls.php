<?php 

//example : {imagedataurls IMG="images.jpg" CLASS="cercle"}
function smarty_function_imagedataurls($params, &$smarty){ 
	$Class   = isset($params['CLASS']) ? "class='".$params['CLASS']."'" : ""; 
	$align   = isset($params['ALIGN']) ? "align='".$params['ALIGN']."'" : ""; 
	$IMAGES  = isset($params['IMG']) ? $params['IMG'] : ""; 
	$STYLE   = isset($params['STYLE']) ? "style='".$params['STYLE']."'" : "";
	$ID		 = isset($params['ID']) ? "id='".$params['ID']."'" : "";
	$ALT	 = isset($params['ALT']) ? "alt='".$params['ALT']."'" : "";
	$TITLE	 = isset($params['TITLE']) ? "title='".$params['TITLE']."'" : "";

	$imageData = base64_encode(file_get_contents($IMAGES));
	@$src = 'data: '.mime_content_type($IMAGES).';base64,'.$imageData;
    return '<img src="'.$src.'" '.$ID.' '.$ALT.'  '.$TITLE.' '.$Class.' '.$STYLE.' '.$align.'>';
} 