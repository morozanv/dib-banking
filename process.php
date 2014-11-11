<?php
session_start();
include_once("blocks/config.php");
$message=array();
if(isset($_POST['username']) && !empty($_POST['username'])){
  $username=mysql_real_escape_string($_POST['username']);
}else{ 
  $message[]='Please enter username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
  $password=mysql_real_escape_string($_POST['password']);
  $password = md5($password);
}else{
  $message[]='Please enter password';
}

$countError=count($message);

if($countError > 0){
 /* for($i=0;$i<$countError;$i++){
     echo($message[$i]).'<br/><br/>';     
 }*/ echo('Acces interzis');
}else{
  $query="select * from users where username='$username' and password='$password'";
  $res=mysql_query($query);
  $checkUser=mysql_num_rows($res);
  $row = mysql_fetch_array($res, MYSQL_ASSOC);
  if($checkUser == 1){
    $_SESSION['LOGIN_STATUS']=true;
    $_SESSION['username']=$username;
    $_SESSION['company']=$row['company'];
    echo'correct';
  }else{
   echo('Utilizator sau parola gresite'); 
 }
}
?>