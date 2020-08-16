<?php
!defined('EMLOG_ROOT') && exit('access deined!');
function siyuangege(){?>
<?php }
addAction('adm_writelog_head', 'siyuangege');
function fuchuang_css(){?>
<script type="text/javascript" src="http://cdn.staticfile.org/jquery/1.11.1/jquery.min.js?ver=1434875239"></script>-->
<link rel="stylesheet" href="<?php echo BLOG_URL;?>content/plugins/vimages/css/amazeui.min.css" />
<script type="text/javascript" src="<?php echo BLOG_URL;?>content/plugins/vimages/js/amazeui.js"></script>
<?php }
function vimages_menu(){
	echo '<div class="sidebarsubmenu"><a href="./plugin.php?plugin=vimages">浮窗配置</a></div>';
}
addAction('adm_sidebar_ext', 'vimages_menu');
addAction('index_footer', 'fuchuang_css');

