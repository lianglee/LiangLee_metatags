<?php
/* LiangLee Meta Tags Manager
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package LiangLeeFramework
 * @Subpackage LiangLeeMetatags
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLee_metatags.php
 */
LiangLee_include('LiangLee_metatags','lib/LiangLeeMetatags');

/**
* Setting up global Varables.
* @global Registering keywords, description, author etc Global variables
* @ascess public
**/

global $LiangLee_Keywords;
/**
* Set Site Description variable
* @ascess public
**/
global $LiangLee_description;
/**
* Set Site Author variable
* @ascess public
**/
global $LiangLee_author;
/**
* Set Site robotos settings variable
* @ascess public
**/
global $LiangLee_robots;
/**
* Set site revisit variable
* @ascess public
**/
global $LiangLee_revisit;
/**
* Set site contents langauage variable
* @ascess public
**/
global $LiangLee_contentLang;
/**
* Set site contents Google Webmaster verification variable
* @ascess public
**/
global $LiangLee_Gverify;
/**
* Set site contents Webutation verification variable
* @ascess public
**/
global $LiangLee_webutation;
/**
* Get Library
* @ascess public
**/
LiangLeeMetatags();
if (elgg_get_plugin_setting('LiangLee_keywords', 'LiangLee_metatags')) {
echo "<meta name=\"keywords\" content=\"".$LiangLee_Keywords."\" />\n";
}
if (elgg_get_plugin_setting('LiangLee_description', 'LiangLee_metatags')) {
echo "<meta name=\"description\" content=\"".$LiangLee_description."\" />\n"; 
}
if (elgg_get_plugin_setting('LiangLee_author', 'LiangLee_metatags')) {
echo "<meta name=\"author\" content=\"".$LiangLee_author. "\" />\n";
}
if (elgg_get_plugin_setting('LiangLee_robots', 'LiangLee_metatags')) {
echo "<meta name=\"robots\" content=\"".$LiangLee_robots."\" />\n";
}
if (elgg_get_plugin_setting('LiangLee_revisit', 'LiangLee_metatags')) {
echo "<meta name=\"revisit-after\" content=\"".$LiangLee_revisit."\" />\n"; 
}
if (elgg_get_plugin_setting('LiangLee_contentLang', 'LiangLee_metatags')) {
echo "<meta http-equiv=\"content-language\" content=\"".$LiangLee_contentLang."\">\n"; 
}
if (elgg_get_plugin_setting('LiangLee_Gverify', 'LiangLee_metatags')) {
echo "<meta http-equiv=\"verify-v1\" content=\"".$LiangLee_Gverify."\">\n"; 
}
if (elgg_get_plugin_setting('LiangLee_webutation', 'LiangLee_metatags')) {
echo "<meta http-equiv=\"webutation-site-verification\" content=\"".$LiangLee_webutation."\">\n"; 
} 
?>
