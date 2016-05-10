<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/11/15
 * Time: 17:45
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link type="text/css" href="<?php echo base_url("static/css/index.css"); ?>" rel="stylesheet" />
<div class="headWrap clear">
	<div class="head clear">
    	<a class="logo l" href="#" target="_blank"><img src="<?php echo base_url('images/logo.png'); ?>" width=100% height=100% border="0" /></a>
        <ul class="menu r">
        	<li class="mar_r"><a class="on" href="<?php echo site_url()?>">主页</a></li>
            <li class="mar_r"><a href="<?php echo site_url('siteIndex/view_code') ;?>">邀请码</a></li>
            <li class="mar_r"><a href="<?php echo site_url('user'); ?>">用户中心</a></li>
            <li class="mar_r"><a href="#">VPN套餐价</a></li>
            <li class="mar_r"><a href="<?php echo site_url('user/login'); ?>">登录</a></li>
            <li class="reg"><a href="<?php echo site_url('user/register') ;?>">注册</a></li>
        </ul>
    </div>
</div>
