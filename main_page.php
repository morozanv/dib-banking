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
	<title>B2B Center | Demo</title>
  <link rel="shortcut icon" href="resourse/favicon.png">
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
  <div class="container-fluid">
    <div class="row">
     <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="#">New Document</a></li>
        <li><a href="#">In process of signing</a></li>
        <li><a href="#">Apply signature</a></li>
        <li><a href="#">Send to client</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="">Archived</a></li>
        <li><a href="">XML file</a></li>
        <li><a href="">Finished</a></li>
      </ul>
    </div>    
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Lista documentelor semnate</h1>      
      <div class="col-xs-12 col-md-8">
        <div id="box_login" class="box login_err_box" style="text-align: center;color:darkred;">
          <div id="message_text" class=""> </div>
          <div id="flash"> </div>
        </div>
        <div class="well well-small">
         <h4><small><strong>Type:</strong> XML, <strong>Default:</strong> "filename.xml"</small></h4>           
         <form id="uploadform" action="upload.php" method="post" enctype="multipart/form-data" target="uploadframe" onsubmit="uploadimg(this); return false">
           <div>
             <input type="file" id="myfile" name="myfile"/>
             <input type="submit" Value="Submit"/></div>
           </form>                
         </div>
       </div>
       <div class="col-xs-6 col-md-4">
        <iframe id="uploadframe" name="uploadframe" src="upload.php" width="8" height="8" scrolling="no" frameborder="0"></iframe>        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(window).load(function clearMsg(){
        if($("#message_text").text().trim() == "")
            $("#message_text").removeClass();
      });
</script> 	  
</body>
</html>