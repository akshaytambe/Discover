<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if(isset($_SESSION['Username'])){
    header("location: home");
}
$getLang = trim(filter_var(htmlentities($_GET['lang']),FILTER_SANITIZE_STRING));
if (!empty($getLang)) {
$_SESSION['language'] = $getLang;
}
// ========================= config the languages ================================
error_reporting(E_NOTICE ^ E_ALL);
if (is_file('home.php')){
    $path = "";
}elseif (is_file('../home.php')){
    $path =  "../";
}elseif (is_file('../../home.php')){
    $path =  "../../";
}
include_once $path."langs/set_lang.php";
?>
<html dir="<? echo lang('html_dir'); ?>">
<head>
    <title><? echo lang('welcome'); ?> | Discover</title>
    <meta charset="UTF-8">
    <meta name="description" content="Discover is a social network platform helps you meet new friends and stay connected with your family and with who you are interested anytime anywhere.">
    <meta name="keywords" content="homepage,main,login,social network,social media,Discover,meet,free platform">
    <meta name="author" content="apt321|msa530">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head_imports_main.php";?>
</head>
<style>
#myVideo {
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

</style>
    <body class="login_signup_body">
      <video autoplay muted loop id="myVideo">
          <source src="videos/Travel_Discover_Ad.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
      </video>
    <!--============[ Nav bar ]============-->
        <div class="login_signup_navbar" style="position:absolute; top: 0;left: 50%;transform: translate(-50%, 0%);border:none; background-color:transparent;">
                <a href="index" class="login_signup_navbarLinks" style="font-family: Apple Chancery;font-size:30;color:white"><img src="imgs/discover-text.png" alt="Discover"/></a>
        </div>
        <!--============[ main contains ]============-->
        <div class="login_signup_box" style="position:absolute; top: 40%;left: 50%;transform: translate(-50%, -50%);background: rgba(0, 0, 0, 0.2);color: white">
        <h3 align="center">Join the Cult</h3>
        <p align="center" style="color: white; margin-bottom: 25px;"><? echo lang('discover_main_string'); ?>.</p>
            <div style="display: flex;">
                <div style="width: 100%;">
                    <p><input type="text" name="login_username" id="un" class="login_signup_textfield" placeholder="<? echo lang('email_or_username'); ?>"/></p>
                    <p><input type="password" name="login_password" id="pd" class="login_signup_textfield" placeholder="<? echo lang('password'); ?>"/></p>
                    <p><a href="#" style="color: white; font-size: 11px; float: <? echo lang('float2'); ?>;"> <? echo lang('forgot_password'); ?></a></p><br>
                    <button type="submit" class="login_signup_btn1" id="loginFunCode"><? echo lang('login'); ?></button>
                    <p id="login_wait" style="margin: 0px;"></p>
                </div>
                <div style="width: 100%;text-align: center;">
                    <img src="imgs/main_icons/discover-logo.png" alt="Discover" style="width: 150px;" />
                </div>
            </div>
        </div>
        <div style="position:absolute; top: 66%;left: 40%;translate(-50%, -50%);background: #fff; border-radius: 3px; max-width: 800px; padding: 15px; margin:auto;margin-top: 15px;color: #7b7b7b;" align="center">
            <? echo lang('dont_have_an_account'); ?> <a href="signup"><? echo lang('signup'); ?></a> <? echo lang('for_free'); ?>
        </div>

<script type="text/javascript">
function loginUser(){
var username = document.getElementById("un").value;
var password = document.getElementById("pd").value;
$.ajax({
type:'POST',
url:'includes/login_signup_codes.php',
data:{'req':'login_code','un':username,'pd':password},
beforeSend:function(){
$('.login_signup_btn1').hide();
$('#login_wait').html("<? echo lang('loading'); ?>...");
},
success:function(data){
$('#login_wait').html(data);
if (data == "Welcome...") {
    $('#login_wait').html("<p class='alertGreen'><? echo lang('welcome'); ?>..</p>");
    setTimeout(' window.location.href = "home"; ',2000);
}else{
    $('.login_signup_btn1').show();
}
},
error:function(err){
alert(err);
}
});
}
$('#loginFunCode').click(function(){
loginUser();
});
$(".login_signup_textfield").keypress( function (e) {
    if (e.keyCode == 13) {
        loginUser();
    }
});
</script>
</body>
</html>
