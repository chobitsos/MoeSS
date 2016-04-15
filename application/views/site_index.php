<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 17:29
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <?php $this->load->view('index_nav');?>

    <div class="jumbotron">
        <h2><?php echo SITE_NAME; ?></h2>
        <p class="lead"> 每个月3G流量，美国高速节点。每日签到送流量!</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo site_url('user/register'); ?>" role="button">立即注册</a></p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <a href="http://hfjr.blob.core.chinacloudapi.cn/shadowsocks/shadowsocks-nightly-2.9.5.apk" target="_blank"><h4>Android</h4></a>
            <p>Android客户端</p>

            <h4><a href="http://hfjr.blob.core.chinacloudapi.cn/shadowsocks/Shadowsocks-2.5.8.zip" target="_blank">Windows</a></h4>
            <p> Windows用户推荐此客户端</p>


        </div>

        <div class="col-lg-6">
            <a href="https://itunes.apple.com/us/app/shadowsocks/id665729974?mt=8" target="_blank"><h4>iOS</h4></a>
            <p>iOS客户端</p>

            <h4><a href="http://hfjr.blob.core.chinacloudapi.cn/shadowsocks/ShadowsocksX-2.6.3.dmg" target="_blank">GoAgentX</a></h4>
            <p> Mac用户推荐此客户端.</p>


        </div>
    </div><?php
    $this->load->view('index_footer');
    $this->load->view('ana') ;?>

</div> <!-- /container -->

</body>
</html>
