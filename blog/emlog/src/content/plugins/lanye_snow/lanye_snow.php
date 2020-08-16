<?php
/*
Plugin Name: 蓝叶雪花飘舞插件
Version: 1.0
Plugin URL: http://lanyes.org/zuopin/emlog-snow.html
Description: 冬天来了，新年到了，该给页面飘点雪花了，激活插件下雪花吧。
Author: 蓝叶
Author Email: w@lanyes.org
Author URL: http://lanyes.org
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function lanye_nofollow(){
echo '<script type="text/javascript" src="'.BLOG_URL.'content/plugins/lanye_snow/xuehua/snow.js"></script><script>createSnow("'.BLOG_URL.'content/plugins/lanye_snow/xuehua/", 60);</script>'."\r\n";
}
addAction('index_footer', 'lanye_nofollow');
