<?php
!defined('EMLOG_ROOT') && exit('出错了！！！!');
function plugin_setting_view(){
?>
<p>
	<span style="font-size:24px;"><strong>你会发现啥都没有</strong></span> 
</p>
<p>
	此插件是一个副产品，Pink模板的浮窗 摘出来写的一个插件（几分钟速写）
</p>
<p>
	无法使用
</p>
<p>
	1.jq版本过低或者根本没有（懒得写jq开关了，vimages.php里面有手动开关）
</p>
<p>
	2.和模板冲突
</p>
<p>
	高仿微信朋友圈浮窗特效
</p>
<p>
	需要改一下模板才可以使用
</p>
<p>
	echo_log.php
</p>
<p>
	里面的
</p>
<p>
	<span style="color:#E53333;">&lt;?php echo $log_content; ?&gt;</span><span style="color:#E53333;"></span>
</p>
<p>
	替换成[谨慎使用记事本，后果自负]
</p>
<p>
	<span style="color:#E53333;font-size:16px;">&lt;ul data-am-widget="gallery" class="am-gallery am-no-layout" data-am-gallery="{ pureview: true}"&gt;<br />
&lt;?php echo $log_content; ?&gt;&lt;/ul&gt;</span>
</p>
<p>
	<br />
</p>
<p>
	<span><span style="font-size:32px;line-height:24px;font-family:KaiTi_GB2312;">拜拜</span></span> 
</p>
<h1>
	我去写作业了~
</h1>
<?php }?>



