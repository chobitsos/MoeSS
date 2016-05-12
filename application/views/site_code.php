<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/13/15
 * Time: 15:01
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title><?php echo SITE_NAME; ?> - 邀请码</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("static/css/common.css"); ?>" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("static/css/bootstrap.min.css"); ?>" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url("static/js/jquery-2.1.1.js"); ?>"></script>
</head>
<body >
 <?php $this->load->view('index_nav');?>
<div style="background:#fff;">
<div class="content" >
    <center><h2 class="sub-header" >若无可用邀请码发布，请联系群主获取，QQ群:469702630</h2></center>
</div><br>
<div class="container">
    <div class="jumbotron">
        <p align='center' valign='center'>邀请码实时刷新</p>
    </div>

    <div class="row marketing" >
        <h2 class="sub-header">邀请码</h2>
        <div class="table-responsive" >
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
</div>
<?php
    $this->load->view('index_footer');
    $this->load->view('ana') ;?>
</body>
</html>