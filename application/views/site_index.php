<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 17:29
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title><?php echo SITE_NAME; ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("static/css/common.css"); ?>" />
    <script type="text/javascript" src="<?php echo base_url("static/js/jquery-2.1.1.js"); ?>"></script>
</head>
<body>
<?php $this->load->view('index_nav');?>
<!--Banner-->
<a class="focus" href="javascript:;"><img src="<?php echo base_url('images/pic1.jpg'); ?>" /></a>
<!--Banner end-->
<div class="content">
<div class="con">
    <p class="msgt1">多设备接入</p>
    <p class="msgt2">Land of aw Free multi device access</p>
    <p class="msgt3"><i></i></p>
    <br /><br />
    <a class="pro1" href="http://ssserver.blob.core.chinacloudapi.cn/shadowsocks/shadowsocks-nightly-2.9.5.apk"></a>
    <a class="pro2" href="https://itunes.apple.com/us/app/shadowsocks/id665729974?mt=8"></a>
    <a class="pro3" href="http://ssserver.blob.core.chinacloudapi.cn/shadowsocks/Shadowsocks-2.5.8.zip"></a>
    <a class="pro4" href="http://ssserver.blob.core.chinacloudapi.cn/shadowsocks/ShadowsocksX-2.6.3.dmg"></a>
</div>
</div>

<script type="text/javascript">
var isMobile=false;
var sUserAgent=navigator.userAgent.toLowerCase();
var bIsIpad=sUserAgent.match(/ipad/i)=='ipad';
var bIsIphone=sUserAgent.match(/iphone os/i)=='iphone os';
var bIsMidp=sUserAgent.match(/midp/i)=='midp';
var bIsUc7=sUserAgent.match(/rv:1.2.3.4/i)=='rv:1.2.3.4';
var bIsUc=sUserAgent.match(/ucweb/i)=='web';
var bIsCE=sUserAgent.match(/windows ce/i)=='windows ce';
var bIsWM=sUserAgent.match(/windows mobile/i)=='windows mobile';
if(bIsIpad||bIsIphone||bIsMidp||bIsUc7||bIsUc||bIsCE||bIsWM){isMobile=true;}
$(document).ready(function(){
	if(isMobile==true){
	$("span.log").css({"width":"100%","height":"100px","border-bottom":"solid 1px #0f1215"});
	$("span.nav").css({"width":"100%","text-align":"center","padding":"20px 0px","text-align":"center","border-top":"solid 1px #333f4a"}).find("a").css({"margin-lef":"auto","margin":"5px"});
	$("a.tou").addClass("btn").before("<br /><br />");
	$("a.focus").css({"height":"240px"}).html("");
	$("p.msgt1").css({"font-size":"1.8em"});
	$("p.msgt2").css({"font-size":"1.4em"});
	}
});
</script>
<!--Content end-->
<!--Footer-->
<?php
    $this->load->view('index_footer');
    $this->load->view('ana') ;
?>
<!--Footer end-->
</body>
</html>
