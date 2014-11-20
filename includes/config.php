<?php
//config.php

include 'credentials.php';

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;


$nav1['template.php'] = "Casa";
$nav1['torino.php'] = "Torino";
$nav1['roma.php'] = "Roma";
$nav1['napoli.php'] = "Napoli";
$nav1['contactus.php'] = "Contatto";
$nav1['viaggi.php'] = "Viaggiare";
$nav1['soccer.php'] = "Soccer";

$img['template.php'] = "header";
$img['torino.php'] = "torino";
$img['roma.php'] = "roma";
$img['napoli.php'] = "napoli";
$img['contactus.php'] = "contattaci";
$img['viaggi.php'] = "signs";
$img['soccer.php'] = "soccer";

/*
echo '<pre>';
var_dump(makeLinks($nav1));
echo '</pre>';
die;
*/

switch(THIS_PAGE)
{
	case 'torino.php':
		$title = "Citta' di Torino";
		$pageName = "Torino - Turin";
		break;
	case 'roma.php':
		$title = "Citta' di Roma";
		$pageName = "Roma - Rome";
		break;
	case 'napoli.php':
		$title = "Citta' di Napoli";
		$pageName = "Napoli - Naples";
		break;
	case 'contactus.php':
		$title = "Contattaci";
		$pageName = "Contattaci - Contact Us";
		break;
	case 'viaggi.php':
		$title = "Viaggia Con Noi";
		$pageName = "Viaggia Con Noi - Join Us";
		break;
	case 'soccer.php';
		$title = "Soccer";
		$pageName = "Calcio - Soccer";
		break;
	default:
		$title = "Le citta' d'Italia";
		$pageName = "Italia";
	}
	
	

function makeImages($img)
{
	$myReturn = '';
	foreach($img AS $url => $image)
	{
		
		if($url == THIS_PAGE)
		{//current page, add class
			$myReturn .= 'images/' . $image . '.jpg';
		}	
	}
	return $myReturn;
}


function makeLinks($nav)
{
	$myReturn = '';
	foreach($nav AS $url => $label)
	{
		
		if($url == THIS_PAGE)
		{//current page, add class
			$myReturn .= '<li class="current"><a href="' . $url . '">' . $label . '</a></li>';
		}
		else
		{//no class
			$myReturn .= '<li><a href="' . $url . '">' . $label . '</a></li>';	
		}	
	}
	return $myReturn;
}

function safeEmail($to, $subject, $message, $replyTo='')
{//builds and sends a safe email, using Reply-To properly!
$fromDomain = $_SERVER["SERVER_NAME"];
$fromAddress = "noreply@" . $fromDomain; //form always submits from domain where form resides
if($replyTo==''){$replyTo='';}
$headers = 'From: ' . $fromAddress . PHP_EOL .
'Reply-To: ' . $replyTo . PHP_EOL .
'X-Mailer: PHP/' . phpversion();
return mail($to, $subject, $message, $headers);
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

/* 
<li><a href="index.html">Home</a></li>
<li><a href="ourwork.html">Our Work</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li><a href="projects.html">Projects</a></li>
<li class="current"><a href="contact.html">Contact Us</a></li>
*/
	
?>