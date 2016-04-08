<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/16/15
 * Time: 16:56
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           系统设置
            <small>System Config</small>
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
                        <h3 class="box-title">系统设置</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="<?php echo site_url( "admin/config_update"); ?>">
                        <div class="box-body">
                        <?php foreach ($configs as $config) : ?>
                            <div class="form-group">
                                <label for="cate_title"><?php echo $config->display_name; ?>    <small><?php echo $config->option_name; ?></small></label>
                                <input type="text" class="form-control" name="<?php echo $config->option_name; ?>" value="<?php echo $config->option_value; ?>" >
                            </div>
                        <?php endforeach ?>
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
