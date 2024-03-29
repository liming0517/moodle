<?php

/////////////////////////////////////////////////////////////////////////////
//                                                                         //
// NOTICE OF COPYRIGHT                                                     //
//                                                                         //
// Moodle - Calendar extension                                             //
//                                                                         //
// Copyright (C) 2003-2004  Greek School Network            www.sch.gr     //
//                                                                         //
// Designed by:                                                            //
//     Avgoustos Tsinakos (tsinakos@teikav.edu.gr)                         //
//     Jon Papaioannou (pj@moodle.org)                                     //
//                                                                         //
// Programming and development:                                            //
//     Jon Papaioannou (pj@moodle.org)                                     //
//                                                                         //
// For bugs, suggestions, etc contact:                                     //
//     Jon Papaioannou (pj@moodle.org)                                     //
//                                                                         //
// The current module was developed at the University of Macedonia         //
// (www.uom.gr) under the funding of the Greek School Network (www.sch.gr) //
// The aim of this project is to provide additional and improved           //
// functionality to the Asynchronous Distance Education service that the   //
// Greek School Network deploys.                                           //
//                                                                         //
// This program is free software; you can redistribute it and/or modify    //
// it under the terms of the GNU General Public License as published by    //
// the Free Software Foundation; either version 2 of the License, or       //
// (at your option) any later version.                                     //
//                                                                         //
// This program is distributed in the hope that it will be useful,         //
// but WITHOUT ANY WARRANTY; without even the implied warranty of          //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           //
// GNU General Public License for more details:                            //
//                                                                         //
//          http://www.gnu.org/copyleft/gpl.html                           //
//                                                                         //
/////////////////////////////////////////////////////////////////////////////

/**
 * Display the calendar page.
 * @copyright 2003 Jon Papaioannou
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package core_calendar
 */
/*引入文件*/
require_once('../config.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/calendar/lib.php');

/*初始化参数*/
$categoryid = optional_param('category', null, PARAM_INT);
$courseid = optional_param('course', SITEID, PARAM_INT);
$view = optional_param('view', 'upcoming', PARAM_ALPHA);
$time = optional_param('time', 0, PARAM_INT);
$lookahead = optional_param('lookahead', null, PARAM_INT);

$url = new moodle_url('/calendar/view.php');

/*设置url参数*/
if (empty($time)) {
    $time = time();
}

if ($courseid != SITEID) {//SITEID是站点首页的上下文
    $url->param('course', $courseid);
}

if ($categoryid) {
    $url->param('categoryid', $categoryid);
}

if ($view !== 'upcoming') {
    $time = usergetmidnight($time);
    $url->param('view', $view);
}

$url->param('time', $time);

/*将设置好的URL传给page*/
$PAGE->set_url($url);

/*从数据库获取course对象*/
$course = get_course($courseid);

//判断要加载的页面
if ($courseid != SITEID && !empty($courseid)) {
    //访问/course/view.php?course=? 的页面
    navigation_node::override_active_url(new moodle_url('/course/view.php', array('id' => $course->id)));
} else if (!empty($categoryid)) {
    core_course_category::get($categoryid); // Check that category exists and can be accessed.
    $PAGE->set_category_by_id($categoryid);//设置课程类别
    navigation_node::override_active_url(new moodle_url('/course/index.php', array('categoryid' => $categoryid)));
} else {
    $PAGE->set_context(context_system::instance());//设置系统上下文实例
}

//校验用户是否登录
require_login($course, false);

//创建日程实例
$calendar = calendar_information::create($time, $courseid, $categoryid);

$pagetitle = '';

$strcalendar = get_string('calendar', 'calendar');

switch($view) {
    case 'day':
        $PAGE->navbar->add(userdate($time, get_string('strftimedate')));
        $pagetitle = get_string('dayviewtitle', 'calendar', userdate($time, get_string('strftimedaydate')));//string默认使用的是
    break;
    case 'month':
        $PAGE->navbar->add(userdate($time, get_string('strftimemonthyear')));
        $pagetitle = get_string('detailedmonthviewtitle', 'calendar', userdate($time, get_string('strftimemonthyear')));
    break;
    case 'upcoming':
        $pagetitle = get_string('upcomingevents', 'calendar');
    break;
}

// Print title and header
$PAGE->set_pagelayout('standard');//设置页面布局
$PAGE->set_title("$course->shortname: $strcalendar: $pagetitle");//设置<title></title>
$PAGE->set_heading($COURSE->fullname);//设置页面的heading
$renderer = $PAGE->get_renderer('core_calendar');//获取渲染器
$calendar->add_sidecalendar_blocks($renderer, true, $view);//添加月视图和事件关键字


echo $OUTPUT->header();//渲染head
echo $renderer->start_layout();
echo html_writer::start_tag('div', array('class'=>'heightcontainer'));
echo $OUTPUT->heading(get_string('calendar', 'calendar'));//获取string并显示在calendar


//获取template的名字等信息和template中的data
list($data, $template) = calendar_get_view($calendar, $view, true, false, $lookahead);
echo $renderer->render_from_template($template, $data);

echo html_writer::end_tag('div');

list($data, $template) = calendar_get_footer_options($calendar);
echo $renderer->render_from_template($template, $data);

echo $renderer->complete_layout();
echo $OUTPUT->footer();

