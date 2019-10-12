<?php
/*引入文件*/
require_once('config.php');
require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->dirroot . '/calendar/lib.php');
require_login();
$PAGE->set_context(context_system::instance());
$url = new moodle_url('/notice.php');
$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');//设置页面布局
$PAGE->set_title("通知");
$PAGE->set_heading("通知：");
echo '<script type="application/javascript" src="../../lib/jquery/jquery-3.2.1.min.js"></script>';
echo $OUTPUT->header();
echo $OUTPUT->heading("您访问的功能正在努力开发中。敬请期待！");
echo "<div style='height: 400px'></div>";
echo $OUTPUT->footer();