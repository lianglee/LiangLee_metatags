<?php
/* LiangLee Meta Tags Manager
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package LiangLeeFramework
 * @Subpackage LiangLeeMetatags
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeMetatags.php
 */
 
/* 
 * Register LiangLeeMetatags
 * @File LiangLee_metatags.php
 */ 
function LiangLeeMetatags(){

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
* Set google verify
* @ascess public
**/
global $LiangLee_Gverify;

/**
* Set webutation verify
* @ascess public
**/
global $LiangLee_webutation;

/**
* Fetch Settings
* @ascess public
**/

/**
* Get Settings for Keywords
* @ascess public
**/
$LiangLee_Keywords = elgg_get_plugin_setting("LiangLee_keywords", "LiangLee_metatags");
/**
* Get Settings for Description
* @ascess public
**/
$LiangLee_description = elgg_get_plugin_setting("LiangLee_description", "LiangLee_metatags");
/**
* Get Settings for Author
* @ascess public
**/
$LiangLee_author = elgg_get_plugin_setting("LiangLee_author", "LiangLee_metatags");
/**
* Get Settings for Robots
* @ascess public
**/
$LiangLee_robots = elgg_get_plugin_setting("LiangLee_robots", "LiangLee_metatags");
/**
* Get Settings for Revisit
* @ascess public
**/
$LiangLee_revisit = elgg_get_plugin_setting("LiangLee_revisit", "LiangLee_metatags");
/**
* Get Settings for Content Langauge
* @ascess public
**/
$LiangLee_contentLang = elgg_get_plugin_setting("LiangLee_contentLang", "LiangLee_metatags");

//added by Boyd Lynn Gerber <gerberb@zenez.com>
$LiangLee_Gverify = elgg_get_plugin_setting('LiangLee_Gverify', 'LiangLee_metatags');
$LiangLee_webutation = elgg_get_plugin_setting('LiangLee_webutation', 'LiangLee_metatags');
}
?>
