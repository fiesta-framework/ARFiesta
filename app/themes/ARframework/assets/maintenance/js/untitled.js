<script type="text/javascript">
$(document).ready(function() {
  $("#width1200").click(function () {
    $("iframe").css({'width':'100%', 'height':'100%', 'top':'0', 'left':'0', 'margin-left':'0'});
  });
  $("#width980").click(function () {
	$("iframe").css({'width':'980px', 'height':'80%', 'top':'10%', 'left':'50%', 'margin-left':'-490px'});
  });
  $("#width768").click(function () {
	$("iframe").css({'width':'768px', 'height':'80%', 'top':'10%', 'left':'50%', 'margin-left':'-384px'});
  });
  $("#width480").click(function () {
	$("iframe").css({'width':'480px', 'height':'80%', 'top':'10%', 'left':'50%', 'margin-left':'-240px'});
  });
  $("#width320").click(function () {
	$("iframe").css({'width':'320px', 'height':'80%', 'top':'10%', 'left':'50%', 'margin-left':'-160px'});
  });
}); 
</script>
<p id="control"><a href="#" id="width1200"><i class="icon-desktop"></i></a> <a href="#" id="width980"><i class="icon-laptop"></i></a> <a href="#" id="width768"><i class="icon-tablet"></i></a> <a href="#" id="width480"><i class="icon-mobile-phone icon-rotate"></i></a> <a href="#" id="width320"><i class="icon-mobile-phone"></i></a></p>