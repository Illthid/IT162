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
        $title = "Choice Produce & Peppers";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'map.php':
      $title = "Map";
      $logo = "fas fa-map-marked-alt";
      $logo_color ='style="color:#00f"';
    break;

    case 'fruit.php':
      $title = "Fruits";
      $logo = "fas fa-apple-alt";
      $logo_color ='style="color:#FF0000"';
    break;

    case 'vegetables.php':
      $title = "Vegetables";
      $logo = "fas fa-carrot";
      $logo_color ='style="color:#FFA500"';
    break;

    case 'peppers.php':
      $title = "Pepper Strings";
      $logo = "fa-solid fa-pepper-hot";
      $logo_color ='style="color:#8B0000"';
    break;


    case 'contactus.php':
        $title = "Choice Produce Contact Page";
        $logo = "fa-paper-plane-o";
        $PageID = 'Contact Choice';
        $logo_color ='style="color:#000000"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';
   }
$nav1['index.php'] = "Welcome";
$nav1['map.php'] = "Map";
$nav1['fruit.php'] = "Fruit";
$nav1['vegetables.php'] = "Vegetables";
$nav1['peppers.php'] = "Pepper Strings";
$nav1['contactus.php'] = "Contact Choice";

// <li><a href="index.php" class="selected">Welcome</a></li>
// <li><a href="big/index.php">Map</a></li>
// <li><a href="aia.php">Fruit</a></li>
// <li><a href="flowchart.php">Vegetables</a></li>
// <li><a href="flowchart.php">Pepper Strings</a></li>
// <li><a href="contactme.php">Contact / Orders</a></li>

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
