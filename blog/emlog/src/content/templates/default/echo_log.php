<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="col-md-7 content">
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<p class="date"><?php echo gmdate('Y-n-j', $date); ?>  <?php blog_author($author); ?> <?php blog_sort($logid); ?> <?php editflg($logid,$author); ?></p>
        <ul data-am-widget="gallery" class="am-gallery am-no-layout" data-am-gallery="{ pureview: true}">
        <?php echo $log_content; ?></ul>
	<p class="tag"><?php blog_tag($logid); ?></p>
	<?php doAction('log_related', $logData); ?>
	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>