<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 17:29
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo site_url('favicon.ico'); ?>">

    <title><?php echo SITE_NAME; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("static/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("static/css/jumbotron-narrow.css"); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url("static/css/index.css"); ?>" rel="stylesheet" />
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->load->view('index_nav');?>
<!--Banner-->
<div class="bannerWrap clear">
	<div class="banner clear"></div>
</div>
<!--Banner end-->
<!--Content-->
<div class="con clear">
	<h1>多设备接入</h1>
    <h2>Land of aw Free multi device access</h2>
    <p><img src="<?php echo base_url('images/titline.png'); ?>" width="390" height="10" border="0"/></p>
    <ul class="conlist">
    	<li class="conlist1 l mar_r1">
        	<a href="http://ssserver.blob.core.chinacloudapi.cn/shadowsocks/shadowsocks-nightly-2.9.5.apk">
            	<p></p>
                <span>Android</span>
                <i>Android客户端安装</i>
            </a>
        </li>
        <li class="conlist2 l mar_r1">
        	<a href="https://itunes.apple.com/us/app/shadowsocks/id665729974?mt=8">
            	<p></p>
                <span>iOS</span>
                <i>iOS客户端安装</i>
            </a>
        </li>
        <li class="conlist3 l mar_r1">
        	<a href="http://ssserver.blob.core.chinacloudapi.cn/shadowsocks/Shadowsocks-2.5.8.zip">
            	<p></p>
                <span>Windows</span>
                <i>Windows用户推荐此客户端</i>
            </a>
        </li>
        <li class="conlist4 r">
        	<a href="http://ssserver.blob.core.chinacloudapi.cn/shadowsocks/ShadowsocksX-2.6.3.dmg">
            	<p></p>
                <span>GoAgentX</span>
                <i>Mac用户推荐此客户端</i>
            </a>
        </li>
    </ul>
</div>
<!--Content end-->
<!--Footer-->
<?php
    $this->load->view('index_footer');
    $this->load->view('ana') ;
?>
<!--Footer end-->
</body>
</html>
