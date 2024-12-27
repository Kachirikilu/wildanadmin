<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->options('/(:any)', function() {
    return;
});

$routes->group('api', ['filter' => 'apiFilter'], function($routes) {
    $routes->get('apicontroller', 'APIController::index');
    $routes->get('apicontroller/(:num)', 'APIController::show/$1');
    $routes->post('apicontroller', 'APIController::create');
    $routes->put('apicontroller/(:num)', 'APIController::update/$1');
    $routes->delete('apicontroller/(:num)', 'APIController::delete/$1');
});

$routes->get('login/google', 'GoogleAuthController::login');
$routes->get('login/google/callback', 'GoogleAuthController::callback');



$routes->get('/', 'Home::index');

$routes->get('/apicontroller', 'APIController::index');

$routes->get('/api', 'Home::getData');

$routes->get('/chat', 'Home::chatmenu/$1');
$routes->get('/chat_group', 'Home::chatgroup');
$routes->get('/chat/(:any)', 'Home::chat/$1');

$routes->get('/percobaan', 'Home::percobaan');
$routes->get('/connect', 'Home::connect');
$routes->get('/data', 'Home::data');

$routes->get('/beta', 'Beta::index');
$routes->get('/beta_article/(:any)', 'Beta::detail/$1');
$routes->get('/beta_article_viewer/(:any)', 'Beta::detailviewer/$1');

$routes->get('/custom', 'Beta::custom');
$routes->get('/custom_view', 'Beta::customview');
$routes->get('/custom_view/(:any)', 'Beta::customdetail/$1');
$routes->get('/custom_delete/(:any)', 'Beta::customdelete/$1');

$routes->get('/kalkulator', 'Home::kalkulator');
$routes->get('/calculator', 'Home::kalkulator');

$routes->get('/mobile', 'Home::mobile');
$routes->get('/smartphone', 'Home::mobile');
$routes->get('/iPhone', 'Home::mobile');
$routes->get('/iPhone14Pro', 'Home::mobile');

$routes->get('/belisusu', 'Home::belisusu');

$routes->get('/registrasi', 'Home::registrasi');
$routes->get('/registrasi_chat', 'Home::registrasichat');
$routes->get('/login', 'Home::login');
$routes->get('/login_chat', 'Home::loginchat');
$routes->get('logout', 'Home::logout');
$routes->get('logout_chat', 'Home::logoutchat');

$routes->get('/create_article', 'Home::create');

$routes->get('/update_article/(:segment)', 'Home::edit/$1');
$routes->get('/article/update/(:segment)', 'Home::editdetail/$1');
$routes->get('/edit_comment/(:segment)', 'Home::editcomment/$1');
$routes->get('/edit_chat_group/(:segment)', 'Home::editchatgroup/$1');
$routes->get('/edit_chat_group_main/(:segment)', 'Home::editchatgroupmain/$1');
$routes->get('/edit_chat/(:segment)', 'Home::editchat/$1');
$routes->get('/userdata_update/(:segment)', 'Home::registrasiupdate/$1');


$routes->delete('/article/(:any)', 'Updatecontroller::delete/$1');
$routes->delete('/userdata/(:any)', 'Registrasicontroller::deleteuser/$1');
$routes->delete('/delete_comment/(:num)', 'Komentarcontroller::deletecomment/$1');
$routes->delete('/delete_chat_group/(:num)', 'Chatcontroller::deletechatgroup/$1');
$routes->delete('/delete_chat_group_main/(:num)', 'Chatcontroller::deletechatgroupmain/$1');
$routes->delete('/delete_chat/(:num)', 'Chatcontroller::deletechat/$1');
$routes->delete('/delete_chat_other/(:num)', 'Chatcontroller::deletechatother/$1');
$routes->delete('/custom_delete/(:any)', 'Custom::deletecustom/$1');

$routes->get('/delete_comment/(:any)', 'Home::deletecomment/$1');
$routes->get('/delete_chat_group/(:any)', 'Home::deletechatgroup/$1');
$routes->get('/delete_chat_group_main/(:any)', 'Home::deletechatgroupmain/$1');
$routes->get('/delete_chat/(:any)', 'Home::deletechat/$1');
$routes->get('/delete_chat_other/(:any)', 'Home::deletechatother/$1');
$routes->get('/userdata_delete/(:any)', 'Home::datauserdelete/$1');

$routes->get('/article/(:any)', 'Home::detail/$1');
$routes->get('/article_viewer/(:any)', 'Home::detailviewer/$1');
$routes->get('/delete_article/(:any)', 'Home::deleteview/$1');
$routes->get('/userdata/(:any)', 'Home::datauser/$1');
$routes->get('/userdata_viewer/(:any)', 'Home::datauserviewer/$1');
$routes->get('/chat_viewer/(:any)', 'Home::chatviewer/$1');

$routes->get('/download/(:any)', 'Tugascontroller::downloadFolder/$1');

// $routes->get('/crop-image', 'ImageCrop::index');
// $routes->match(['get', 'post'], 'ImageCrop/store', 'ImageCrop::store');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
