<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//首页
$route['admin'] = "admin/index";
//专业
$route['admin/professional/add'] = "admin/professional/add";
$route['admin/professional/list'] = "admin/professional";
//学校
$route['admin/university/add'] = "admin/university/add";
$route['admin/score/add'] = "admin/university/score";
$route['admin/score/list'] = "admin/university/scorelist";
$route['admin/pro/add'] = "admin/university/proadd";
$route['admin/pro/list'] = "admin/university/prolist";
$route['admin/project/add'] = "admin/university/projectadd";
$route['admin/project/list'] = "admin/university/projectlist";
$route['admin/pic/add'] = "admin/university/picadd";
$route['admin/pic/list'] = "admin/university/piclist";
$route['admin/demeanor/add'] = "admin/university/demeanoradd";
$route['admin/demeanor/list'] = "admin/university/demeanorlist";
$route['admin/comment/list'] = "admin/university/comment";
$route['admin/unscore/add'] = "admin/university/unscoreadd";
$route['admin/unscore/update'] = "admin/university/unscoreupdate";
$route['admin/unscore/list'] = "admin/university/unscorelist";
//高考批次线
$route['admin/gkscore/add'] = "admin/gkscore/add";
$route['admin/gkscore/list'] = "admin/gkscore";
//友情链接
$route['admin/link/add'] = "admin/link/add";
$route['admin/link/list'] = "admin/link";
//广告位
$route['admin/adv/add'] = "admin/adv/add";
$route['admin/adv/list'] = "admin/adv";
//数据管理
$route['admin/data/copy'] = "admin/data/copy";
$route['admin/data/recover'] = "admin/data";
//系统设置
$route['admin/system/add'] = "admin/system";
