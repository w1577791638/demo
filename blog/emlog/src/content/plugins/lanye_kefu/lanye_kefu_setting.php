<?php
!defined('EMLOG_ROOT') && exit('access deined!');
function plugin_setting_view()
{
include(EMLOG_ROOT.'/content/plugins/lanye_kefu/lanye_kefu_config.php');
?>
<div class="containertitle"><b>蓝叶客服面板设置</b><?php if(isset($_GET['setting'])):?><span class="actived">设置成功</span><?php endif;?></div>
<div class=line></div>
<form action="./plugin.php?plugin=lanye_kefu&action=setting" method="POST">
<p>悬浮位置：<select name="ly_div_weizhi"><option value="left" <?php if($config["ly_div_weizhi"]=="left") echo "selected"; ?>>居左</option><option value="right" <?php if($config["ly_div_weizhi"]=="right") echo "selected"; ?>>居右</option></select></p>
<p>距离顶部：<input type="text" name="ly_div_top" value="<?php echo $config["ly_div_top"];?>" /></p>
<p>文字颜色：<input type="text" name="ly_div_color" value="<?php echo $config["ly_div_color"];?>" /></p>
<p>QQ号码：<input style="margin-left:7px;" type="text" name="ly_div_qq" value="<?php echo $config["ly_div_qq"];?>" /></p>
<p>自定义代码修改：<br />
<textarea name="ly_div_daima" style="width:400px;height:120px;margin-top:10px;"  /><?php echo $config["ly_div_daima"];?></textarea></p>
<p><input type="submit" value="保存设置" style="padding:10px;cursor:pointer;font-size:14px;" /></p>
</form>
<div style="margin-top:20px; padding:5px; width:600px; border:1px dashed #CCC">
<p><b style="color:red;">说明：</b><br />
自定义代码输入框内可以自己根据需要添加和删除代码，举个例子如果你要添加个百度搜索的文字链接，那就将下面的代码复制进去修改下链接和名称就行了；理论上可以无限制添加文字链接菜单，只需要复制下面的代码到输入框中修改下即可。如果返回顶部没效果，请检查页面是否引用了JQ库代码。<br />
<span style="color:red">&lt;div class="kf_diy"&gt;&lt;a  href="http://baidu.com" target="_blank"&gt;百度搜索&lt;/a&gt;&lt;/div&gt;</span></p>
</div>
<?php
}
function plugin_setting(){
	$newConfig = '<?php
$config = array(
 "ly_div_weizhi" => "'.$_POST["ly_div_weizhi"].'",
 "ly_div_top" => "'.$_POST["ly_div_top"].'",
 "ly_div_color" => "'.$_POST["ly_div_color"].'",
 "ly_div_qq" => "'.$_POST["ly_div_qq"].'",
	"ly_div_daima" => "'.str_replace("\r\n", " ", str_replace('"', "'", $_POST["ly_div_daima"])).'"
);';
	@file_put_contents(EMLOG_ROOT.'/content/plugins/lanye_kefu/lanye_kefu_config.php', $newConfig);
}


?>