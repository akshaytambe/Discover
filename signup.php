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
    <title><? echo lang('create_new_account'); ?> | Discover</title>
    <meta charset="UTF-8">
    <meta name="description" content="Discover is a social network platform helps you meet new friends and stay connected with your family and with who you are interested anytime anywhere.">
    <meta name="keywords" content="signup,social network,social media,Discover,meet,free platform">
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
    <div align="center" style="position:absolute; top: 58%;left: 50%;transform: translate(-50%, -50%);color: white">
        <div class="login_signup_box2" style="text-align:<? echo lang('textAlign'); ?>;">
        <!--============[ sign up sec ]============-->
            <h4 align="center"><? echo lang('create_new_account'); ?></h4>
            <p><input type="text" name="signup_fullname" class="login_signup_textfield" id="fn" placeholder="<? echo lang('fullname'); ?>"/></p>
            <p><input type="text" name="signup_username" class="login_signup_textfield" id="un" placeholder="<? echo lang('username'); ?>"/></p>
            <p><input type="email" name="signup_email" class="login_signup_textfield" id="em" placeholder="<? echo lang('email'); ?>"/></p>
            <p><input type="password" name="signup_password" class="login_signup_textfield" id="pd" placeholder="<? echo lang('password'); ?>"/></p>
            <p><input type="password" name="signup_cpassword" class="login_signup_textfield" id="cpd" placeholder="<? echo lang('confirm_password'); ?>"/></p>
            <p>
            <select class="login_signup_textfield" name="gender" id="gr" style="color:#757575;">
              <option selected><? echo lang('male'); ?></option>
              <option><? echo lang('female'); ?></option>
            </select>
            </p>
            <p style="font-size: 11px;color: #5d5d5d;margin: 8px 0px; ">
                <? echo lang('by_clicking_signup_str'); ?> <a href="terms"><? echo lang('terms'); ?></a>, <a href="privacy"><? echo lang('privacyPolicy'); ?></a> <? echo lang('and'); ?> <a href="cookie"><? echo lang('cookie_use'); ?></a>.</p>
            <button type="submit" class="login_signup_btn2" id="signupFunCode"><? echo lang('create_account'); ?></button>
            <p id="login_wait" style="margin: 0px;"></p>
        </div>
        <!--============[ login sec ]============-->
        <div style="background: #fff; border-radius: 3px; width: 420px; padding: 15px; margin: 15px;color: #7b7b7b;" align="center">
            <? echo lang('already_have_an_account'); ?> <a href="index"><? echo lang('login_now'); ?></a>
        </div>
    </div>

<script type="text/javascript">
function signupUser(){
var fullname = document.getElementById("fn").value;
var username = document.getElementById("un").value;
var emailAdd = document.getElementById("em").value;
var password = document.getElementById("pd").value;
var cpassword = document.getElementById("cpd").value;
var gender = document.getElementById("gr").value;
$.ajax({
type:'POST',
url:'includes/login_signup_codes.php',
data:{'req':'signup_code','fn':fullname,'un':username,'em':emailAdd,'pd':password,'cpd':cpassword,'gr':gender},
beforeSend:function(){
$('.login_signup_btn2').hide();
$('#login_wait').html("<b><? echo lang('creating_your_account'); ?></b>");
},
success:function(data){
$('#login_wait').html(data);
if (data == "Done..") {
    $('#login_wait').html("<p class='alertGreen'><? echo lang('done'); ?>..</p>");
    setTimeout(' window.location.href = "home"; ',2000);
}else{
    $('.login_signup_btn2').show();
}
},
error:function(err){
alert(err);
}
});
}
$('#signupFunCode').click(function(){
signupUser();
});

$(".login_signup_textfield").keypress( function (e) {
    if (e.keyCode == 13) {
        signupUser();
    }
});
</script>
    </body>
</html>
