<?php 

namespace Fiesta\Core\HyperText;

/**
* Input type
*/
class Input
{
	public static function text($name,$placeholder=null,$id=null,$class=null,$style=null)
	{
		echo "<input type='text' ";
		if(!is_null($placeholder)) echo " placeholder='$placeholder' ";
		if(!is_null($id)) echo " id='$id' ";
		if(!is_null($name)) echo " name='$name' ";
		if(!is_null($class)) echo " class='$class' ";
		if(!is_null($style)) echo " style='$style' ";
		echo "/>";
	}
}