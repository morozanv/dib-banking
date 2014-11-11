<? include_once("config.php");?>
<?
session_start(); # Starts the session
session_unset(); # removes all the variables in the session
session_destroy(); # destroys the session

if(!$_SESSION['username'])
	header("Location: login.php");
else
	echo "Error occured!!";
?>