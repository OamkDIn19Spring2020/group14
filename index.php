<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sheet music maker</title>

  <div class="title">

      <?php  if (isset($_SESSION['username'])) : ?>
      	<p> <a href="index.php?logout='1'">logout</a> </p>
      <?php endif ?>
  </div>

  	<link rel="stylesheet"  href="style.css">
  	<script >
    function drag(evt){
      evt.dataTransfer.setData("image",evt.target.id);
    }
    function drop(evt){
      evt.preventDefault();
      var data = evt.dataTransfer.getData("image");
      var image = document.getElementById(data);
      evt.target.appendChild(image);
    }
     function allowDrop(evt){
      evt.preventDefault();
    }
</script>
  </head>
  <h1 class="title">Sheet music maker<h1>

  <body>

  	<img src="image.png" id="image" draggable="true" ondragstart="drag(event)" /> <img src="chord.jpg" id="image" draggable="true" ondragstart="drag(event)" /> <img src="chord.jpg" id="image" draggable="true" ondragstart="drag(event)" />   <img src="chord.jpg" id="image" draggable="true" ondragstart="drag(event)" /> <img src="chord2.jpg" id="image" draggable="true" ondragstart="drag(event)" /> <img src="chord2.jpg" id="image" draggable="true" ondragstart="drag(event)" /> <img src="chord.jpg" id="image" draggable="true" ondragstart="drag(event)" />

<h2>--------------------------------------------------------------------------------------------------------------<h2>

  	<div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="container" ondrop="drop(event)" ondragover="allowDrop(event)"></div>


  </body>
  </html>
