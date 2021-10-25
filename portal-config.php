<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early

ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "David's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'aia.php':
      $title = "David's Final Project AIA (Client work)";
      $logo = "fa-universal-access";
      $logo_color ='style="color:#00f"';
    Break;


    case 'contactme.php':
        $title = "David's WEB120 Contact Page";
        $logo = "fa-paper-plane-o";
        $PageID = 'Contact Sara';
        $logo_color ='style="color:#0f0"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';
   }
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact David";


/* Here we're creating a function to generate links and keep the hightlight
 on the curent page
 <li><a href="index.php" class="selected">Welcome</a></li>
 <li><a href="big/index.php">Big</a></li>
 <li><a href="aia.php">AIA</a></li>
 <li><a href="flowchart.php">Flowchart/Layout</a></li>
 <li><a href="fp/index.php">Final Project</a></li>
 <li><a href="contactme.php">Contact David</a></li>
 */
 function makeLinks($nav1)
 {
   $myReturn = '';
   foreach($nav1 as $url => $text){
     if($url == THIS_PAGE){
       $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
     }else{
       $myReturn .= "<li><a href=\"$url\">$text</a></li>";
     }
   }

   return $myReturn;
 }

?>
