<?php
 /**
 * Plugin Name: 明月浩空音乐播放器
 * Version: 20200712
 * Plugin URL: https://myhkw.cn
 * Description: 基于网易，QQ音乐歌曲ID全自动解析的Html5浮窗音乐播放器
 * Author: 明月浩空
 * Author Email: admin@lmih.cn
 * Author URL: http://lmih.cn
 */
!defined('EMLOG_ROOT') && exit('access deined!');
function MyhkPlayer(){
	require_once 'MyhkPlayer_config.php';
	$xl = $config["xl"].'.';
	if($config["xl"] == '@'){
		$xl = '';
	}
	if($config["jq"]=="open"){
		echo '<script src="//lib.baomitu.com/jquery/3.4.1/jquery.min.js"></script>'."\n";
	}
	if($config["mb"]=="open"){
		echo '<script id="myhk" src="https://' . $xl . 'myhkw.cn/player/js/player.js" key="' . $config["id"] . '" m="1"></script>'."\n";
	}else{
		echo '<script id="myhk" src="https://' . $xl . 'myhkw.cn/player/js/player.js" key="' . $config["id"] . '"></script>'."\n";
	}
}
function MyhkPlayer_menu() {
	echo '<div class="sidebarsubmenu" id="MyhkPlayer"><a href="./plugin.php?plugin=MyhkPlayer"><img src="'.BLOG_URL.'content/plugins/MyhkPlayer/style/logo.png" align="middle" style="margin-top:-10px"/>明月浩空音乐</a></div>';
}
addAction('index_footer', 'MyhkPlayer');
addAction('adm_sidebar_ext', 'MyhkPlayer_menu');