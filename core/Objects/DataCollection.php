<?php 

namespace Fiesta\Core\Objects;

use Fiesta\Core\Config\Config;	

/**
* 	Data array
*/
class DataCollection
{
	
	private $data=array();
	//
	private $pagin_activated;
	private $NbrPages;//
	private $NbrRows;
	private $RowsPerPage; 
	private $CurntPage; //
	//
	function __construct($arr,$pagination=false,$nbrRows=0,$RowsPerPage=0,$page=1) 
	{
		//
		$this->data = $arr;
		//
		$this->pagin_activated = $pagination;
		if($pagination)
		{
			
			$this->CurntPage=$page;
			//
			$this->NbrRows=$nbrRows;
			//
			$this->RowsPerPage=$RowsPerPage;
			//
			$this->NbrPages=ceil($nbrRows/$RowsPerPage);
			//Table::show($this);
		}
		//

	}
	//
	public function put($arr)
	{
		$this->date=$arr;
	}

	public function all()
	{
		return $this->data;
	}

	public function links($range=-1,$OtherGets=false,$previous="",$nexte="")
	{
		// Pagination Style
		$pagination=true;
		if(Config::get('view.pagination_style')=="simple")
		{
			$pagination=!true;
			if(empty($nexte))$nexte=Config::get('view.paginationSimpleNext');
			if(empty($previous))$previous=Config::get('view.paginationSimplePrevious');
		}
		//


		// Pagination class
		if(Config::get('view.pagination_class')=="{bootstrap}")
		{
			if($pagination) echo '<nav style="display:inline-block"><ul class="pagination">';	
			else echo '<nav style="display:inline-block"><ul class="pager">';
		}
		else echo '<nav style="display:inline-block"><ul class="'.Config::get('view.pagination_class').'">';

   
  		//previous page
		if(($this->CurntPage-1)>1) $prev=$this->CurntPage-1;
		else $prev=1;
		//
		//other gets
		if($OtherGets && isset($_GET) && !empty($_GET))
		{
			$Prevgets="?";
			$i=0;
			foreach ($_GET as $key => $value) {
				if($key!="url" && $key!=Config::get('view.pagination_param'))
				{
					if($i>0) $Prevgets.="&";
					$Prevgets.=$key."=".$value;
					$i++;
				}
			}
			if($i>0) $Prevgets.='&';
			$Prevgets.=Config::get('view.pagination_param').'='.$prev;
		}
		else $Prevgets='?'.Config::get('view.pagination_param').'='.$prev;
		
		//
		//?>
		<li>
	      <a href="<?php echo $Prevgets ?>" aria-label="Previous">
	       	<?php if($pagination): ?>
	        	<span aria-hidden="true">&laquo;</span>
	    	<?php else: ?>
	    		<span aria-hidden="true"><?php echo $previous; ?></span>
	    	<?php endif ?>
	      </a>
	    </li>
	    <?php


	    // Range
	    $cntAll=1+($range*2);
	    if($range>0 && $cntAll<$this->NbrPages)
	    {
	    	$cntAll=1+($range*2);
	    	$max=(($this->CurntPage+$range)<=$this->NbrPages)?$this->CurntPage+$range:$this->NbrPages;
	    	$min=(($this->CurntPage-$range)>=1)?$this->CurntPage-$range:1;
	    	$showedBtn=$max-$min;
	    	//
	    	if(($max-$this->CurntPage)<$range)
	    	{
	    		$dif=($max-$cntAll)+1;
	    		if(($dif)>1) $min=$dif;
	    	}
	    	elseif(($this->CurntPage-$min)<$range)
	    	{
	    		$dif=$cntAll;
	    		if($dif<$this->NbrPages) $max=$dif;
	    	}
	    }
	    else
	    {
	    	$max=$this->NbrPages;
	    	$min=1;
	    }

		// Pagination
	    if($pagination)
	    {
			for ($i=$min; $i <= $max; $i++) { 
				if($i==$this->CurntPage) { ?><li class="active"><?php }
				else { ?><li><?php }

					//
					//other gets
					if($OtherGets && isset($_GET) && !empty($_GET))
					{
						$Numgets="?";
						$j=0;
						foreach ($_GET as $key => $value) {
							if($key!="url" && $key!=Config::get('view.pagination_param'))
							{
								if($j>0) $Numgets.="&";
								$Numgets.=$key."=".$value;
								$j++;
							}
						}
						if($j>0) $Numgets.='&';
						$Numgets.=Config::get('view.pagination_param').'='.$i;
					}
					else $Numgets='?'.Config::get('view.pagination_param').'='.$i;


					//
					echo "<a href='".$Numgets."'>".$i."</a>";
				?></li><?php
			}
		}
		//

		//next page
		if(($this->CurntPage+1)<$this->NbrPages) $next=$this->CurntPage+1;
		else $next=$this->NbrPages;
		//other gets
		if($OtherGets && isset($_GET) && !empty($_GET))
		{
			$Nextgets="?";
			$i=0;
			foreach ($_GET as $key => $value) {
				if($key!="url" && $key!=Config::get('view.pagination_param'))
				{
					if($i>0) $Nextgets.="&";
					$Nextgets.=$key."=".$value;
					$i++;
				}
			}
			if($i>0) $Nextgets.='&';
			$Nextgets.=Config::get('view.pagination_param').'='.$next;
		}
		else $Nextgets='?'.Config::get('view.pagination_param').'='.$next;
		//?>
		<li>
	      <a href="<?php echo $Nextgets ?>" aria-label="Next">
	        <?php if($pagination): ?>
	        	<span aria-hidden="true">&raquo;</span>
	    	<?php else: ?>
	    		<span aria-hidden="true"><?php echo $nexte; ?></span>
	    	<?php endif ?>
	      </a>
	    </li>
	    <?php
		//




		echo '</ul></nav>';
	}
	

}