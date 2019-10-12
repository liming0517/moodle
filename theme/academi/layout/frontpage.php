<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Frontpage Layout.
 * @package    theme_academi
 * @copyright  2015 onwards LMSACE Dev Team (http://www.lmsace.com)
 * @author    LMSACE Dev Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

// Get the HTML for the settings bits.
$html = theme_academi_get_html_for_settings($OUTPUT, $PAGE);
if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>"/>
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php
// Header file included.
require_once(dirname(__FILE__) . '/includes/header.php');
?>
<!--=========== Slideshow section start here ===========-->
<div>
    <?php
    $toggleslideshow = theme_academi_get_setting('toggleslideshow');
    if ($toggleslideshow == 1) {
        require_once(dirname(__FILE__) . '/includes/slideshow.php');
    } else {
        echo "<br/><br/>";
    }
    ?>
</div>
<!--=========== Slideshow section start here ===========-->
<!--Slider-->

<!-- Main Moodle Main Contents -->
<div id="page" class="container">

    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
    <!--test-->
    <div id="page-content" class="row">

        <?php
        if (!empty($OUTPUT->blocks_for_region('side-pre'))) {
            $class = "col-md-9";
        } else {
            $class = "col-md-12";
        }
        ?>

        <div id="<?php echo $regionbsid ?>" class="<?php echo $class; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </div>
        <?php  echo("<script>console.log('test==".$OUTPUT->course_content_footer()."');</script>");  ?>
        <!--插入自己的模块-->
<!--            <div id="region-bs-main-and-pre" class="col-md-12">
                <span class="notifications" id="user-notifications"></span>
                <div role="main"><span id="maincontent"></span><a class="skip-block skip" href="#skipavailablecourses">跳过
                        现有课程</a>
                    <div id="frontpage-available-course-list"><h2>自定义功能</h2>
                        <div class="courses frontpage-course-list-all">
                            <div class="coursebox clearfix odd first last" data-courseid="2" data-type="1">
                                <div class="info"><h3 class="coursename"><a class="" href="http://192.168.111.23:8081/moodle/mod/forum/view.php?id=4">修改原有的moodle</a>
                                    </h3>
                                    <div class="moreinfo"></div>
                                </div>
                                <div class="info"><h3 class="coursename"><a class="" href="http://192.168.111.23:8081/moodle/mod/test/index.php">自己测试使用的连接webservice</a>
                                    </h3>
                                    <div class="moreinfo"></div>
                                </div>
                                <div class="content content-block">
                                    <div class="summary">
                                        <div class="no-overflow"><p>
                                                在项目moodle原有功能的基础上，自定义发送请求</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="skip-block-to" id="skipavailablecourses"></span><br></div>
            </div>-->
        <?php echo $OUTPUT->blocks('side-pre', 'col-md-3'); ?>
    </div>
    <?php echo (!empty($flatnavbar)) ? $flatnavbar : ""; ?>
</div>
<?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
</body>
</html>
