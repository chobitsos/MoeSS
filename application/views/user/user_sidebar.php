<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/12/15
 * Time: 18:55
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $gravatar; ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>欢迎, <?php echo $user_name; ?></p>

<a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
</div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li <?php if ($index_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user');?>">
            <i class="fa fa-dashboard"></i> <span>用户中心</span>
        </a>
    </li>

    <li <?php if ($node_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/node_list');?>">
            <i class="fa fa-sitemap"></i> <span>节点列表</span>
        </a>
    </li>

    <li <?php if ($info_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/my_info');?>">
            <i class="fa fa-user"></i> <span>我的信息</span>
        </a>
    </li>

    <li <?php if ($update_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/profile_update');?>">
            <i class="fa  fa-pencil"></i> <span>修改资料</span>
        </a>
    </li>

    <li <?php if ($code_active) { echo 'class="active"';};?>>
        <a href="<?php echo site_url('user/invite_code');?>">
            <i class="fa fa-users"></i> <span>查看邀请</span>
        </a>
    </li>

</ul>
</section>
<!-- /.sidebar -->
</aside>
