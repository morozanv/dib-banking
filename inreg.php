<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>B2B Center | Inregistrare</title>
    <link rel="shortcut icon" href="resourse/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/960_12_col.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css">
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
        var paramMsg = "null";
        var tipMsg = "null";

        if (paramMsg != "null") {
            if (tipMsg == "error") {
                $("#message_text").removeClass();
                $("#message_text").addClass('alert alert-error');
            } else if (tipMsg == "success") {
                $("#message_text").removeClass();
                $("#message_text").addClass('alert alert-success');
            } else if (tipMsg == "info") {
                $("#message_text").removeClass();
                $("#message_text").addClass('alert alert-info');
            } else {
                $("#message_text").removeClass();
                $("#message_text").addClass('alert alert-error');
            }
        }
    });
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
{$(window).load(function clearMsg(){
    if($("#message_text").text().trim() == "")
      $("#message_text").removeClass();
});
}
function validateMyForm()
{
    document.getElementById("message_text").innerHTML="";
    var str=document.getElementById("email").value;
    var fld=document.getElementById("telefon");
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');
    var flag=1;
    if(str==null||str=='')
    {
        document.getElementById("message_text").innerHTML="Email: camp obligatoriu<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    else {var at="@";
    var dot=".";
    var lat=str.indexOf(at);
    var lstr=str.length;
    var ldot=str.indexOf(dot);
    if (str.indexOf(at)==-1){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;

    }
    if (str.indexOf(at,(lat+1))!=-1){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    if (str.indexOf(dot,(lat+2))==-1){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }

    if (str.indexOf(" ")!=-1){
        document.getElementById("message_text").innerHTML="Email invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }}
    var str=document.getElementById("parola").value;
    if(str==null||str=='')
    {
        document.getElementById("message_text").innerHTML+="Parola: camp obligatoriu";
        document.getElementById("message_text").innerHTML+="<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    var str=document.getElementById("telefon").value;
    if(str==null||str=='')
    {
        document.getElementById("message_text").innerHTML+="Telefon: camp obligatoriu<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    else {if (isNaN(parseInt(stripped)))   {
        document.getElementById("message_text").innerHTML+="Numar de telefon invalid<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }  }
    var str=document.getElementById("companie").value;
    if(str==null||str=='')
    {
        document.getElementById("message_text").innerHTML+="Companie: camp obligatoriu<br>";
        $("#message_text").removeClass();
        $("#message_text").addClass("alert alert-error");
        flag=0;
    }
    if (flag==0) {
        return false;
    } else {
        return true;
    }
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
                ieVersion = parseInt(RegExp.$1);
            }
        }
        else {
            ie = false;
        }
        if(ie && ieVersion < 11){
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
    <div class="loginForm alignCenter clearfix" id="sign">
        <h2>Inregistrează-te!</h2>

        <div class="hr">
            <div class="inner">Introduceți datele pentru crearea contului de acces:</div>
        </div>

        <div id="box_login" class="box login_err_box" style="text-align: center;color:darkred;">
            <div id="message_text" class="error_message"></div>
        </div>
        <div class="clear"></div>

        <div class="formarea">
            <form action="self_register_login.php" onsubmit="return validateMyForm();" method="post">
                <div class="formControl">
                    <i class="fa fa-envelope"> </i>
                    <input class="behind" id="email" type="text" name="email_name" placeholder="Email">
                </div>

                <div class="formControl">
                    <i class="fa fa-unlock-o"> </i>
                    <input class="behind" id="parola" type="password" name="parola_name" placeholder="Parola" value="">
                </div>
                <div class="formControl">
                    <i class="fa fa-user"> </i>
                    <input class="behind" id="companie" type="text" name="companie_name" placeholder="Companie">
                </div>
                <div class="formControl">
                    <i class="fa fa-phone"> </i>
                    <input class="behind" id="telefon" type="text" name="telefon_name" placeholder="Telefon">
                </div>
                <div class="alignCenter">
                    <input type="submit" class="btn_account" value="Creeaza cont">                    
                    <input type="hidden" name="redirect" value="#">
                    <input type="hidden" name="fromExpire" value="false">
                </div>
            </form>    
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