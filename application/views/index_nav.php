<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 17:45
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link type="text/css" href="<?php echo base_url("static/css/common.css"); ?>" rel="stylesheet" />

<div class="header">
<div class="con">
    <span class="log"></span>
    <span class="nav">
    <a href="<?php echo site_url()?>" class="cc">首页</a>
    <a href="<?php echo site_url('siteIndex/view_code');?>">邀请码</a>
    <a href="<?php echo site_url('user'); ?>">用户中心</a>
    <a href="javascript:;">VPN套餐价</a>
    <a href="<?php echo site_url('user/login'); ?>" class="tou">登录</a>
    <a href="<?php echo site_url('user/register') ;?>" class="btn">注册</a>
   </span>
    <i class="clear"></i>
</div>
</div>
