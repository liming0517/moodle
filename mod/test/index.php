<?php
/**
 * 测试项目
 * @copyright 2019 李明
 * @package core_test
 */

/*引入文件*/
require_once('../../config.php');
require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->dirroot . '/calendar/lib.php');
require_login();
$PAGE->set_context(context_system::instance());
$url = new moodle_url('/mod/test/index.php');
$PAGE->set_url($url);

$PAGE->set_pagelayout('standard');//设置页面布局
$PAGE->set_title("欢迎登录");
$PAGE->set_heading("欢迎登录");
echo '<script type="application/javascript" src="../../lib/jquery/jquery-3.2.1.min.js"></script>';
echo $OUTPUT->header();
echo $OUTPUT->heading("请输入：");

echo '<form xmlns="http://www.w3.org/1999/html"id="form">
            <input  type="text" id="username" name="username" placeholder="请输入用户名"><br>
            <input  type="text" id="password" name="password" placeholder="请输入密码"><br>
            <input  type="button" id="login" value="点击登录">
      </form>';

echo '<script type="application/javascript">
$(function() {
  $("#login").click(function() {
      //发送跨域请求
    $.ajax({
        "url":"http://192.168.111.23:8083/my/user.do",
		"data":"username=" + $("#username").val()+"&"+ "password="+$("#password").val(),
		"type":"get",
	    "success":function() {
            console.log("回调成功");
						location.href ="http://localhost:8083/index.jsp";
						},
	    "error":function() {
	        console.log("访问失败");
	        $("h1").text("");
	        $("#form").append("<h1>username or password invalid</h1>");
	    }
    });
  });
})
</script>';

echo $OUTPUT->footer();