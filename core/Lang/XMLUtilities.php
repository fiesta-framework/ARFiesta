<?php
namespace Fiesta\Core\Translator;

/**
 * The XMLUtilities class
 * @author Tristan
 *
 */
class XMLUtilities
{

	/** 
	 * convert xml string or file to php array - useful to get a serializable value
	 *
	 * @param string $xmlstr
	 * @return array
	 * @author Tristan Vanrullen (corrections to handle multiple elements having the same name)
	 * based on work published by :
	 * @author Adrien aka Gaarf
	 */
	
	public static function array_to_xmlstr($array,$currentElement="XML",$level=0)
	{
		$quote="\"";
		$newline="\r\n";
		$s="";
		$space="";
		for ($i=0;$i<$level;$i++) $space.="   ";
		// if the element is multiple, then we call recursively the method over all its elements
		if (is_array($array) && isset($array['@multiple'])) 
		{
			//		echo "\n<br/>ELEMENT $currentElement is multiple !";
			foreach ($array as $val) //for each subelement
			{
				if (is_array($val))//get rid of functional elements
				{
					//$s.=array_to_xmlstr($val,$currentElement,true);
					//element -----------------------
					$s.="$space<$currentElement";
					if (is_array($val)) //if the value is an array
					{
						//attributs -----------------------
						if (isset($val['@attributes']) && is_array($val['@attributes']))
						foreach ($val['@attributes'] as $att=>$attval)
						{
							$s.=" ".$att."=$quote".$attval."$quote";
						}
						//sub elements
						if ((isset($val['@attributes']) && count($val)>1)
						|| (!isset($val['@attributes']) && count($val)>0))
						{
							$s.=">$newline";
							foreach ($val as $subkey=>$subval)
							{
								if ($subkey!="@attributes")
									$s.=array_to_xmlstr($subval,$subkey,$level+1);
							}
							$s.="$space</$currentElement>$newline";
						}
						else $s.="/>$newline";
					}
					else if ($val!="") //if the value is a string
					{
						$s.=">";
						$s.=$val;
						$s.="$space</$currentElement>$newline";
					}
					else $s.="/>$newline"; //if the value is empty
				}
			}
		}
		else if (!is_array($array))
		{
			if ($array!="")
				$s.="$space<$currentElement>".$array."</$currentElement>$newline";
			else
				$s.="$space<$currentElement/>$newline";
		}
		else //standard situation : elements are keys of the array
		{
			$s.="$space<".$currentElement;
			if (isset($array['@attributes']) && is_array($array['@attributes']))
			{
				foreach ($array['@attributes'] as $att=>$attval)
				{
					$s.=" ".$att."=$quote".$attval."$quote";
				}
			}
			//sub elements 
			if ((isset($array['@attributes']) && count($array)>1)
			|| (!isset($array['@attributes']) && count($array)>0))
			{
				$s.=">$newline";
				foreach ($array as $key=>$val)
				{
					if ($key=="@attributes") continue;
					if (is_array($val) && isset($val['@multiple'])) 
					{
						$s.=array_to_xmlstr($val,$key,$level+1);
					}
					else 
					{
						$s.=array_to_xmlstr($val,$key,$level+1);
					}
				}
				$s.="$space</$currentElement>$newline";
			}
			else $s.="/>$newline";
		}//end standard situation	
		return $s;
	}
	
	/**
	 * convert an XML structure string into an array
	 * @param string $xmlstr
	 * @return multitype:
	 */
	public static function xmlstr_to_array($xmlstr)
	{
		if ($xmlstr==null || empty($xmlstr)) return array();
		$doc = new \DOMDocument();
		$doc->loadXML(utf8_encode($xmlstr));
		return domnode_to_array($doc->documentElement);
	}
	
	/**
	 * convert an XML file into an array
	 * @param string $xmlfile the xml file to load
	 * @param string $charset the charset of the xmlfile like iso-8859-1 or UTF-8 (if not provided in the xml header)
	 * @return array
	 */
	public static function xmlfile_to_array($xmlfile,$charset="UTF-8")
	{
		$docxml = new \DOMDocument();
		try {
			$docxml->load($xmlfile,LIBXML_DTDLOAD);
		}
		catch (Exception $e)
		{
			throw new Exception("file $xmlfile couldn't be opened! ".$e->getMessage());
		}
		if (isset($docxml->xmlEncoding)) $charset=$docxml->xmlEncoding;
		return XMLUtilities::domnode_to_array($docxml->documentElement,$charset);
	}
	
	
	/**
	 * convert a dom node into an array
	 * @param DOM element $node
	 * @param string $charset like iso-8859-1 or UTF-8 (if not provided in the xml header)
	 * @return array
	 */
	public static function domnode_to_array($node,$charset="UTF-8") 
	{
		$output = array();
		switch ($node->nodeType)
		{
			case XML_CDATA_SECTION_NODE:
			case XML_TEXT_NODE:
				$output = htmlspecialchars(trim($node->textContent),ENT_NOQUOTES);
				break;
			case XML_ELEMENT_NODE:
				for ($i=0, $m=$node->childNodes->length; $i<$m; $i++)
				{
				$child = $node->childNodes->item($i);
				$v = XMLUtilities::domnode_to_array($child,$charset);
				if(isset($child->tagName))
				{
				$t = $child->tagName;
					if(!isset($output[$t]))
					{
					$output[$t] = array();
					}
						else $output[$t]['@multiple'] = true;
						if (is_array($v) && count($v)>0)
						{
						$output[$t][] = $v;
					}
					else if (is_array($v) && count($v)==0)
							$output[$t][] = (string) "";
						else if (!is_array($v))
							$output[$t][] = (string) $v;
					}
					elseif($v)
					{
					$output = (string) $v;
					}
					}
					if(is_array($output))
					{
						if($node->attributes->length)
						{
							$a = array();
							foreach($node->attributes as $attrName => $attrNode)
							{
								$a[$attrName] =
								htmlspecialchars((string) $attrNode->value,ENT_NOQUOTES);
							}
							$output['@attributes'] = $a;
						}
						foreach ($output as $t => $v)
						{
							if(is_array($v) && count($v)==1 && $t!='@attributes')
							{
								$output[$t] = $v[0];
							}
						}
					}
					break;
				}
		return $output;
	}
	
	
	/**
	 * convert an XML file into an associative array by trying to match a given element_path
	 * 
	 * @param string $xmlfile the xml file to load
	 * @param string $charset the charset of the xmlfile (if not provided in the xml header)
	 * @param string $element_path the path of elements to match before associating data
	 * @param string $key_attribute the attribute name used as key in the associative array
	 * @param string $value_attribute the attribute name used as value in the associative array (leave empty to use PCDATA instead of an attribute)
	 * @return array
	 */
	public static function xmlfile_to_associative_array($xmlfile,$charset="UTF-8",$element_path="",$key_attribute,$value_attribute="")
	{
		$docxml = new \DOMDocument();
		try {
			$docxml->load($xmlfile,LIBXML_DTDLOAD); //to avoid the "&nbsp;" warning, use this LIBXML_DTDLOAD parameter
		}
		catch (Exception $e)
		{
			throw new Exception("file $xmlfile couldn't be opened! ".$e->getMessage());
		}
		if (isset($docxml->xmlEncoding)) $charset=$docxml->xmlEncoding;
		return XMLUtilities::domnode_to_associative_array($docxml->documentElement,$charset,$element_path,$key_attribute,$value_attribute);
	}
	

	/**
	 * convert a dom node into an associative array by trying to match a given element_path
	 * @param DOM element $node
	 * @param string $charset	
	 * @param string $element_path the path of elements to match before associating data
	 * @param string $key_attribute the attribute name used as key in the associative array
	 * @param string $value_attribute the attribute name used as value in the associative array (leave empty to use PCDATA instead of an attribute)
	 * @param string $current_element_path element path built during recursion (leave blank at first call)
	 * @return array
	 */
	public static function domnode_to_associative_array($node,$charset="UTF-8",$element_path="",$key_attribute,$value_attribute="",$current_element_path="")
	{
		$output = array();
		$match=false;
		if (isset($node->tagName))
		{
			if ($current_element_path=="") $current_element_path=strtolower($node->tagName);
			else $current_element_path.="/".strtolower($node->tagName);
			if (strtolower($element_path)==$current_element_path)
				$match=true;
		}
		switch ($node->nodeType)
		{
			case XML_ELEMENT_NODE:
				if ($match)
				{
					//find the key attribute
					$key="";
					if($node->attributes->length)
					{
						foreach($node->attributes as $attrName => $attrNode)
						{
							if (strtolower($attrName)==strtolower($key_attribute))
							{
								$key=$attrNode->value;
								break;
							}
						}
					}
					if ($key=="") return $output;
					//find the value attribute or CDATA
					$value="";
					if($value_attribute!="" && $node->attributes->length)
					{
						foreach($node->attributes as $attrName => $attrNode)
						{
							if (strtolower($attrName)==strtolower($value_attribute))
							{
								$value=htmlspecialchars(trim($attrNode->value),ENT_NOQUOTES);
								break;
							}
						}
					}
					else 
					{
						for ($i=0, $m=$node->childNodes->length; $i<$m; $i++)
						{
							$child = $node->childNodes->item($i);
							if ($child->nodeType==XML_CDATA_SECTION_NODE || $child->nodeType==XML_TEXT_NODE)
								$value.=htmlspecialchars_decode(trim($child->textContent));
						}
					}
					$output[$key]=$value;
					return $output;	
				} //end if match
				else 
				{
					for ($i=0, $m=$node->childNodes->length; $i<$m; $i++)
					{
						$child = $node->childNodes->item($i);
						$v = XMLUtilities::domnode_to_associative_array($child,$charset,$element_path,$key_attribute,$value_attribute,$current_element_path);
						if (is_array($v))
							foreach ($v as $key => $value)
								$output[$key]=$value;
					}
					return $output;
				}//end else (if match)
		 break;
		}
		return $output;
	}
}
?>