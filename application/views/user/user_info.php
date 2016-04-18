<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/12/15
 * Edit: dash50 @ 2016-4-18
 * Time: 21:28
 */

defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
?><!-- Right side column. Contains the navbar and content of the page -->
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url("static/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url("static/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url("static/css/AdminLTE.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- jQuery 2.0.2 -->
    <script src="<?php echo base_url("static/js/jquery-2.0.3.min.js"); ?>"></script>
    <script src="<?php echo base_url("static/js/jquery.validate.min.js"); ?>"></script>
    <script src="<?php echo base_url("static/js/jquery.form.min.js"); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url("static/js/bootstrap.min.js"); ?>" type="text/javascript"></script>
  
   <head> 
   <script language="javascript">
//          $(document).ready(function() {
//            var options = {
//                target:        '#rechargeResult',   // target element(s) to be updated with server response
//                success:       showResponse,  // post-submit callback
//                dataType:  'json'        // 'xml', 'script', or 'json' (expected server response type)
//            };
        $(function() {  
            $('#rechargeForm').submit(function() {
                $(this).ajaxSubmit({  
                    type:"post",  //提交方式  
                    dataType:"json", //数据类型  
                    success:function(data){ //提交成功的回调函数  
                    if (data.result == "success") {
                        alert('222222');
                        window.location.href = "<?php echo site_url('user'); ?>";
                        } 
                    else {
                        alert(data.result);
                        }  
                    }  
               }); 
                return false;
            });
        });       
      
</script>
</head>

<body class="bg-black">
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户中心
            <small>User Panel</small>
        </h1>
    </section>
    <!-- Main content -->
   <?php
    $attributes = array(
        'role' => 'form',
        'name' => 'recharge',
        'id' => 'rechargeForm'//,
        //'onsubmit' => 'return logincheck()'
    );
    echo form_open('user/do_recharge', $attributes);
    ?>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">我的信息</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>用户名: <?php echo $user_name; ?></p>
                        <p>邮箱: <?php echo $user_email;  ?></p>
                        <p>套餐: <span class="label label-info"> <?php echo $plan; ?> </span> </p>
                        <p>剩余套餐流量: <?php echo $money; ?>元  </p>
                        <p>充值邀请码：<input type="text" maxlength="40" size = "40" class="form-control" id="charge_code" name="charge_code" required > <button type="submit"class="btn btn-info btn-sm">充值</button></p>
                    </div><!-- /.box -->
                </div>
            </div>
    </section><!-- /.content -->
     <?php echo form_close(); ?>
</aside><!-- /.right-side -->
</body>