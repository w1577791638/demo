<?php
/*
Plugin Name: 美洽在线客服插件
Version: 1.0
Plugin URL: http://lanyes.org
Description: 在网站右侧添加悬浮美洽在线客服。
Author: 蓝叶
Author Email: w@lanyes.org
Author URL: http://lanyes.org
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function lanye_meiqia_menu()//写入插件导航
{echo '<div class="sidebarsubmenu" id="lanye_meiqia_menu"><a href="./plugin.php?plugin=lanye_meiqia">美洽客服设置</a></div>';}
addAction('adm_sidebar_ext', 'lanye_meiqia_menu');
function lanye_meiqia_code(){echo '<script src="'.BLOG_URL.'content/plugins/lanye_meiqia/lanye_meiqia_js.php" type="text/javascript"></script>';}
addAction('index_footer', 'lanye_meiqia_code');