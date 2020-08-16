<?php
/*
Plugin Name: 蓝叶客服面板
Version: 1.0
Plugin URL: http://lanyes.org
Description: 在网站右侧添加悬浮客服面板附带有返回顶部效果。
Author: 蓝叶
Author Email: w@lanyes.org
Author URL: http://lanyes.org
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function lanye_kefu_menu()//写入插件导航
{echo '<div class="sidebarsubmenu" id="lanye_kefu_menu"><a href="./plugin.php?plugin=lanye_kefu">蓝叶客服设置</a></div>';}
addAction('adm_sidebar_ext', 'lanye_kefu_menu');

function lanye_kefu(){
require_once 'lanye_kefu_config.php';
echo '
<script>
$(function(){
$(".fhdb").click(function(){
$("body,html").animate({scrollTop:0},1000);
return false;
});});  
</script>
<style>
.kfbox{ position:fixed;'.$config["ly_div_weizhi"].':10px;top:'.$config["ly_div_top"].';z-index:999;width:94px;}
.kf_qq, .kf_diy{background:url('.BLOG_URL.'content/plugins/lanye_kefu/uptop.png) no-repeat;}
.kf_qq {height:108px; background-position:0 0; position:relative;}
.kf_qq a{ position:absolute;width:94px;height:108px;top:0;left:0;}
.kf_diy{height:28px;background-position: 0 -161px;margin-top: 5px;font-size:14px;text-align:center;line-height:26px;}
.kf_diy a{color:'.$config["ly_div_color"].' !important;font-family:Microsoft Yahei;}
.kf_diy a:hover{color:#2ba4ce}
*html .kfbox {position: absolute;top:expression(eval(document.documentElement.scrollTop));
}</style>
<div class="kfbox">
<div class="kf_qq"><a href="http://wpa.qq.com/msgrd?v=3&uin='.$config["ly_div_qq"].'&site=qq&menu=yes" title="点击联系站长" target="_blank" rel="nofollow"></a></div>
'.$config["ly_div_daima"].'
<div class="kf_diy"><a class="fhdb" onclick="return false;" href="#">返回顶部</a></div>
</div>'."\r\n";
}
addAction('index_footer', 'lanye_kefu');