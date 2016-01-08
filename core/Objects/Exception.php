<?php 

namespace Fiesta\Core\Objects;

use Fiesta\Core\Objects\Table;

/**
* Exception Class
*/
class ArFrameworkException extends \Exception
{
	
	

}

/**
* 
*/
class ExceptionDisplay
{
	
	public static function show($e)
	{
		?>
		<div style="margin-bottom:10px;background:green;color:white">
			<?php echo $e->getMessage(); ?>
		</div>
		<div style="margin-bottom:10px;background:green;color:white">
			<?php echo $e->getPrevious(); ?>
		</div>
		<div style="margin-bottom:10px;background:green;color:white">
			<?php echo $e->getCode(); ?>
		</div>
		<div style="margin-bottom:10px;background:green;color:white">
			<?php echo $e->getFile(); ?>
		</div>
		<div style="margin-bottom:10px;background:green;color:white">
			<?php echo $e->getLine(); ?>
		</div>
		<div style="margin-bottom:10px;background:green;color:white">
			<?php Table::show($e->getTrace()); ?>
		</div>
		<?php
	}
}