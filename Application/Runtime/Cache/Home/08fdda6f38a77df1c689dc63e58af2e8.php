<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统设置
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>目前仅支持短信宝 网站:http://www.cocsms.com/</p>
            </div>
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">短信验证设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?php echo U('Home/Config/smsSet');?>">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($sms['id']?$sms['id']:0); ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">用户名</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="user" placeholder="" value="<?php echo ($sms["user"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">密码</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="pass" placeholder="" value="<?php echo ($sms["pass"]); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
</section>