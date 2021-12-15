<? include 'index-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Choice Produce & Peppers</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://kit.fontawesome.com/cb67d3026a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/nav1.css" />
<link rel="stylesheet" href="css/styles1.css" />
<link rel="stylesheet" href="css/form1.css" />
</head>

<body>
  <!-- WRAPPER -->
<main class="wrapper">
  <header>
    <h1><a href="index.php"><i class="logo fa <?=$logo?>" <?=$logo_color?>></i>Choice Produce & Peppers</a></h1>
  <nav>
    <!-- The nav will be going to javascript -->
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
      <!-- <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="template.php">Map</a></li>
      <li><a href="template.php">Fruit</a></li>
      <li><a href="template.php">Vegetables</a></li>
      <li><a href="template.php">Pepper Strings</a></li>
      <li><a href="contactus.php">Contact / Orders</a></li> -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
  </header>
  <!--Above will be Header.php  -->
