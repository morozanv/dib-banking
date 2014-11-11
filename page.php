<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
	header("Location: login.php");
	exit();
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>B2B - Demo</title>
	<style>	
	   #bg{ width:1140px; height:600px; }
     #uploadframe { display:none; }
	</style>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link href="css/style_2.css" rel="stylesheet"> 
  <script type="text/javascript" src="js/functii.js"></script>
  <!-- File-style -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
</head>
<body data-twttr-rendered="true">
  <? include("blocks/nav.php") ?>
  <? include("blocks/header.php") ?>  
  <div class="container">
    <div class="row">
     <div class="col-md-12">
       <section id="Options">
        <div class="page-header">
         <h1>Upload .xml <span class="glyphicon glyphicon-upload"></span></h1>
        </div>
       </section>
       <div class="well well-small">
         <h4><small><strong>Type:</strong> XML, <strong>Default:</strong> "filename.xml"</small></h4>         	
          <form id="uploadform" action="upload.php" method="post" enctype="multipart/form-data" target="uploadframe" onsubmit="uploadimg(this); return false">
           <div>
           <input type="file" id="myfile" name="myfile" />
           <input type="submit" Value="Submit"/></div>
          </form>                
        </div>
        <div class="well well-small">
         <iframe id="uploadframe" name="uploadframe" src="upload.php" width="8" height="8" scrolling="no" frameborder="0"></iframe>
         <div id="showimg"> </div>                 
        </div>
     </div>
     <div class="col-md-12">
      <div class="well well-small">
       
       </div>
     </div>
    </div>
  </div>	
  <? include("blocks/footer.php") ?>  
</body>
</html>