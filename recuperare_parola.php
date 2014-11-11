<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>B2B Center | Recovery</title>
    <link rel="shortcut icon" href="resourse/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/960_12_col.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css"> -->
</head>
<body>
  <div class="footer_login">
    <span class="copyright">
        &copy; <?php echo date('Y'); ?> Deeplace® 
        &nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="" title="About">About</a>
        &nbsp;&nbsp;|&nbsp;&nbsp;
        <a href=""  title="Support">Support</a>
        &nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://ro.wikipedia.org/wiki/Sistem_de_management_al_documentelor" target="_blank" title="Legal">Legal</a>
    </span>
    <span class="warning">AVERTISMENT: Accesul neautorizat la acest sistem este interzis si va fi urmarit penal de lege.<br> Prin accesarea acestui sistem, sunteti de acord ca actiunile dvs. pot fi monitorizate in cazul in care se suspecteaza utilizarea neautorizata</span>  </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
    $(function(){
        $('.btn_sign').click(function(){
            $(this).parent().parent().hide(200);
                // $('#sign').show(200);
                window.location.replace("inreg.php");
            });
        $('.btn_signup').click(function(){
            $('.bodySection').hide(200);
                /*  $('#login').hide(200);
                $('#sign').show(200);       */
                window.location.replace("inreg.php");
            });
        $('.btn_log').click(function(){
            $('.bodySection').hide(200);
                //    $('#sign').hide(200);
                //  $('#login').show(200);
                window.location.replace("login.php");
            });
        $('.authentic').click(function(){
            $('.bodySection').hide(200);
                // $('#sign').hide(200);
                // $('#login').show(200);
                window.location.replace("login.php");
            });
        $('.signup').click(function(){
            $('.bodySection').hide(200);
            $('#sign').show(200);
            $('#login').hide(200);
        });
    })
</script>
<script type="text/javascript">
function validateMyForm()
{
    var str=document.getElementById("forgotEmail").value;
    if(str==null||str=='')
    {
        document.getElementById("message_text").innerHTML="Email: camp obligatoriu";
        return false;
    }
    else {var at="@"
        var dot="."
    var lat=str.indexOf(at)
    var lstr=str.length
    var ldot=str.indexOf(dot)
    if (str.indexOf(at)==-1){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }

    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }

    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }

    if (str.indexOf(at,(lat+1))!=-1){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }

    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }

    if (str.indexOf(dot,(lat+2))==-1){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }

    if (str.indexOf(" ")!=-1){
        document.getElementById("message_text").innerHTML="Email invalid";
        return false;
    }}

    return true;
}

function clearMsg(){
 $("#message_text").removeClass();
}

$(document).ready(function(){
    if (navigator.appName == "Microsoft Internet Explorer") {
                //Set IE as true
                ie = true;
                //Create a user agent var
                var ua = navigator.userAgent;
                //Write a new regEx to find the version number
                var re = new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");
                //If the regEx through the userAgent is not null
                if (re.exec(ua) != null) {
                    //Set the IE version
                    var ieVersion = parseInt(RegExp.$1);
                }
            }
            else {
                ie = false;
            }
            if(ieVersion < 11){
                $('#autentifica').hide();
                $('#box_login').html('Va rugam upgradati Internet Explorer la versiunea 11');
                $("#box_login").html("Va rugam upgradati Internet Explorer la versiunea 11<br/>Please upgrade Internet Explorer to version 11<br/> <a href = 'http://windows.microsoft.com/en-us/internet-explorer/download-ie)'>Download</a> ");
                $('#box_login').css("color","red");
            }
        });
</script>
<div id="container">
    <div class="topSection clearfix">
        <div class="container_12 clearfix">
            <div class="logo fleft"><a href="index.php"><img src="resourse/logo.png" alt="logo"></a></div>
            <div class="fright">
                <a href="javascript:void(0)" onclick="clearMsg();" class="authentic"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                <a href="javascript:void(0)" onclick="clearMsg();" class="btn_signup"><span class="glyphicon glyphicon-plus"></span> Register</a> 
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="container_13">
        <div class="loginForm alignCenter clearfix" id="login2">
            <div class="hr">
                <div class="inner">Introduceti datele pentru recuperarea parolei:</div>
            </div>
            <div id="box_login" class="box login_err_box" style="text-align: center;color:darkred;">
             <br>                    
         </div>
         <div class="clear"></div>
         <div class="formarea">
            <form action="process_recuperare_parola.php" method="post" onsubmit="return validateMyForm();">
                <div class="clear"></div>  <br>
                <h5 style="text-align: center">Introduceti adresa de email</h5><br>
                <div class="formControl">
                    <i class="fa fa-envelope"> </i>
                    <input class="behind" type="text" id="forgotEmail" name="forgotEmail" placeholder="Email ">
                </div>
                <div class="alignCenter">
                    <input id="forgotEmailSubmit" name="forgotEmailSubmit" type="submit" class="btn_account btn_login" style="width:100%;" value="Recupereaza parola">
                    <p>Nu ai un cont? <a href="inreg.php" class="signup" style="color: mediumblue">Inregistreaza-te acum!</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</div>    
<div id="footer"></div>
<script type="text/javascript">
$('#form input').keydown(function (e) {
    if (e.keyCode == 13) {
        $('#form').submit();
    }
});
</script>    
</body>
</html>