<?php
!defined('EMLOG_ROOT') && exit('access deined!');
function plugin_setting_view(){include(EMLOG_ROOT.'/content/plugins/lanye_meiqia/lanye_meiqia_config.php');?>
<style>
.mq_set_box{margin-top:10px;border:1px solid #bce8f1;border-radius:4px;background:#FFFFFF;}
.mq_set_box .set_name{border-bottom:1px solid #ccc;padding:8px;background:#d9edf7;color:#31708f;font-weight:bold;}
.mq_set_box .set_name .set_desc{display:block;color:#837F7F;font-weight:normal;font-family:"宋体";padding-top:5px;}
.mq_set_box .set_body{padding:10px;}
.mq_set_box .set_body textarea,.mq_set_box .set_body input[type="text"]{width:760px;border:1px solid #ccc;box-shadow:inset 0 0 1px #ccc;outline:none;padding:10px;border-radius:4px;}
.mq_set_submit{margin:25px 0 10px;}
.mq_set_submit input{width:auto;height:auto;border:0;padding:15px 20px;font-size:12px;margin:0 10px 0 0;border-radius:4px;color:#fff;background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent); background-size: 30px 30px;box-shadow: 0 0 4px 1px rgba(16,160,249,0.3);background-color:#20a2de;cursor:pointer;outline: none;}
.mq_set_submit input:hover{background-color:#00aff0;}
.tips{background-color:#FF8686;border-radius:2px;padding:15px;margin-top:10px;letter-spacing:1px;}
.tips p{margin:0;padding:0 0 5px;color:#fff;}
.tips a{color:#fff;}
</style>
<div class="containertitle"><b>美洽在线客服设置</b><?php if(isset($_GET['setting'])):?><span class="actived">设置成功</span><?php endif;?></div>
<div class=line></div>
<div class="tips"><p>请前往美洽注册登陆，在后台左下角点击设置按钮，进入ID查询页面会看到当前帐号的ID，把ID填写到这个下方设置里。</p>
<p>在美洽后台设置里，还可以设置聊天窗口的样式等操作。</p>
<p>美洽注册地址：<a href="https://app.meiqia.com/signup" target="_blank">https://app.meiqia.com/signup</a></p>
<p>美洽下载地址：<a href="http://meiqia.com/downloads" target="_blank">http://meiqia.com/downloads</a></p>
</div>
<form action="./plugin.php?plugin=lanye_meiqia&action=setting" method="POST">
<div class="mq_set_box">
 <div class="set_name">美洽ID设置<div class="set_desc">登陆美洽后台，点击左下角设置按钮，在ID查询里可以看到当前登陆帐号的ID。</div><strong></strong></div>
 <div class="set_body"><input type="text" name="mq_id" value="<?php echo $config["mq_id"];?>"></div>
</div>
<div class="mq_set_submit"><input type="submit" value="保存设置" /></div>
</form>
<?php
}
function plugin_setting(){
	$newConfig = '<?php
$config = array(
 "mq_id" => "'.$_POST["mq_id"].'"
);';
	@file_put_contents(EMLOG_ROOT.'/content/plugins/lanye_meiqia/lanye_meiqia_config.php', $newConfig);
}
?>