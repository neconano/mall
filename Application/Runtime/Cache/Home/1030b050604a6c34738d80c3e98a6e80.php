<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        商城管理
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">商城设置</h3>
                </div>
                <!-- form start -->
                <form action="<?php echo U('Home/Config/shopSet');?>" method="post" class="form-horizontal">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($config['id']?$config['id']:0); ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商城名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($config["name"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">微信自动登录</label>

                            <div class="col-md-7">
                                <label class="radio-inline"><input name="oauth" type="radio"
                                    <?php if($config["oauth"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="oauth" type="radio"
                                    <?php if($config["oauth"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">微信网页授权调试模式</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="oauth_debug" type="radio"
                                    <?php if($config["oauth_debug"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="oauth_debug" type="radio"
                                    <?php if($config["oauth_debug"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">账户支付</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="balance_payment" type="radio"
                                    <?php if($config["balance_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="balance_payment" type="radio"
                                    <?php if($config["balance_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">微信支付</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="wechat_payment" type="radio"
                                    <?php if($config["wechat_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="wechat_payment" type="radio"
                                    <?php if($config["wechat_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">支付宝支付</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="alipay_payment" type="radio"
                                    <?php if($config["alipay_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="alipay_payment" type="radio"
                                    <?php if($config["alipay_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">货到付款</label>

                            <div class="col-sm-10">
                                <label class="radio-inline"><input name="cool_payment" type="radio"
                                    <?php if($config["cool_payment"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>开启</span></label>
                                <label class="radio-inline"><input name="cool_payment" type="radio"
                                    <?php if($config["cool_payment"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>关闭</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">公众号二维码</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($config['qrcode'])): ?><img
                                                src="/wemall-multiUser/Public/Admin/dist/img/noimage.gif">
                                            <?php else: ?>
                                            <img src="<?php echo ($config["qrcode"]); ?>"><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2"></label>

                            <div class="col-sm-10">
                                <a class="btn btn-default" href="<?php echo U('Home/Wechat/getQRCode');?>">生成公众号二维码
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商城公告</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="notification"
                                          rows="3"><?php echo ($config["notification"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">温馨提示</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="reminder" rows="3"><?php echo ($config["reminder"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">客服</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="tel" value="<?php echo ($config["tel"]); ?>" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="address" value="<?php echo ($config["address"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">订单满减</label>

                            <div class="col-md-2">
                                <input class="form-control" name="full" value="<?php echo ($config["full"]); ?>" placeholder="满多少"
                                       type="number">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" name="discount" value="<?php echo ($config["discount"]); ?>" placeholder="减多少"
                                       type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">运费</label>

                            <div class="col-sm-4">
                                <input class="form-control" placeholder="" name="freight" value="<?php echo ($config["freight"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配送时间</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="delivery_time"
                                          rows="3"><?php echo ($config["delivery_time"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($config["remark"]); ?>"
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