<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/15/15
 * Time: 16:26
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户列表
            <small>User List</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><?php if ($user) { echo "编辑"; } else { echo "添加"; } ?>用户</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php if ($user) { echo site_url( "admin/user_update/$user->uid"); } else { echo site_url( 'admin/user_update'); } ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="cate_title">用户名</label>
                                <input type="text" class="form-control" name="user_name" <?php if ($user) {echo "value=\"$user->user_name\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">E-mail</label>
                                <input type="email" class="form-control" name="email" <?php if ($user) {echo "value=\"$user->email\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">密码</label>
                                <input type="text" class="form-control" name="pass" <?php if ($user) {echo "value=\"$user->pass\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">SS密码</label>
                                <input type="text" class="form-control" name="passwd" <?php if ($user) {echo "value=\"$user->passwd\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">上传</label>
                                <input type="text" class="form-control" name="u" <?php if ($user) {echo "value=\"$user->u\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">下载</label>
                                <input type="text" class="form-control" name="d" <?php if ($user) {echo "value=\"$user->d\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">总流量</label>
                                <input type="text" class="form-control" name="transfer_enable" <?php if ($user) {echo "value=\"$user->transfer_enable\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">套餐</label>
                                <input type="text" class="form-control" name="plan" <?php if ($user) {echo "value=\"$user->plan\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">端口</label>
                                <input type="text" class="form-control" name="port" <?php if ($user) {echo "value=\"$user->port\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">开关</label>
                                <input type="text" class="form-control" name="switch" <?php if ($user) {echo "value=\"$user->switch\""; } ?> >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">启用</label>
                                <input type="text" class="form-control" name="enable" <?php if ($user) {echo "value=\"$user->enable\""; } ?> >
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="action" value="add" class="btn btn-primary">提交</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
