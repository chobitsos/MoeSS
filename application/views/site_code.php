<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/13/15
 * Time: 15:01
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo site_url('favicon.ico'); ?>">
	<link type="text/css" href="<?php echo base_url("static/css/index.css"); ?>" rel="stylesheet" />
	

    <title><?php echo SITE_NAME; ?> - 邀请码</title>

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
 <?php $this->load->view('index_nav');?>
<!--<div class="bannerWrap clear">
	<div class="banner clear"></div>
</div>-->
<br><div>
    <center><h2 class="sub-header" >若无可用邀请码发布，请联系群主获取，QQ群:469702630</h2></center>
</div><br>

<div class="container">   
    <div class="jumbotron">
        <p class="lead">邀请码实时刷新</p>
    </div>

    <div class="row marketing">
        <h2 class="sub-header">邀请码</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>###</th>
                    <th>邀请码</th>
                    <th>状态</th>
                </tr>
                </thead>

                <tbody>
                <?php if ($codes) { $a=1; foreach ($codes as $code) : ?>
                    <tr>
                        <td><?php echo $a;$a++; ?></td>
                        <td><a href="<?php echo site_url( "user/register/$code->code"); ?>" target="_self"><?php echo $code->code;?></a></td>
                        <td>可用</td>

                    </tr>
                <?php endforeach; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- /container -->
<?php
    $this->load->view('index_footer');
    $this->load->view('ana') ;?>
</body>
</html>