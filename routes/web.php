<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::post('/inquiryform', 'HomeController@inquiryform');

// compnay menu
Route::get('/aboutus', 'HomeController@aboutus');
Route::get('/engagement-models', 'HomeController@engagement_models');
Route::get('/client-confidentiality', 'HomeController@client_confidentiality');
Route::get('/life-at-plutus', 'HomeController@life_at_plutus');

// services
Route::get('/services', 'HomeController@services');
Route::get('/ios-development', 'HomeController@ios_development');
Route::get('/android-development', 'HomeController@android_development');
Route::get('/ionic-development', 'HomeController@ionic_development');
Route::get('/react-native-development', 'HomeController@react_native_development');
Route::get('/flutter-development', 'HomeController@flutter_development');
Route::get('/php-development', 'HomeController@php_development');
Route::get('/nodejs-development', 'HomeController@nodejs_development');
Route::get('/angularjs-development', 'HomeController@angularjs_development');
Route::get('/reactjs-development', 'HomeController@reactjs_development');
Route::get('/fullstack-development', 'HomeController@fullstack_development');
Route::get('/python-development', 'HomeController@python_development');
Route::get('/aspnet-development', 'HomeController@aspnet_development');
Route::get('/wordpress-development', 'HomeController@wordpress_development');
Route::get('/drupal-development', 'HomeController@drupal_development');
Route::get('/magento-development', 'HomeController@magento_development');
Route::get('/softwaretesting-development', 'HomeController@softwaretesting_development');
Route::get('/uiux-development', 'HomeController@uiux_development');
Route::get('/digital-marketing-development', 'HomeController@digital_marketing_development');
Route::get('/customer-support-maintenance', 'HomeController@customer_support_maintenance');

// 
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/rsd_portfolio', 'HomeController@rsd_portfolio');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact-us', 'HomeController@contact_us');


// hire resource menu
Route::get('/hire-php-developers', 'HomeController@hire-php-developers');
Route::get('/hire-android-app-developer', 'HomeController@hire-android-app-developer');
Route::get('/hire-ios-app-developer', 'HomeController@hire-ios-app-developer');
Route::get('/hire-wordpress-developer', 'HomeController@hire-wordpress-developer');
Route::get('/hire-magento-app-developer', 'HomeController@hire-magento-app-developer');
Route::get('/hire-uiux-designer', 'HomeController@hire-uiux-designer');
Route::get('/hire-ionic-app-developer', 'HomeController@hire-ionic-app-developer');
Route::get('/hire-reactnative-app-developer', 'HomeController@hire-reactnative-app-developer');
Route::get('/hire-flutter-app-developer', 'HomeController@hire-flutter-app-developer');
Route::get('/hire-nodejs-developer', 'HomeController@hire-nodejs-developer');
Route::get('/hire-reactjs-developer', 'HomeController@hire-reactjs-developer');
Route::get('/hire-angularjs-developer', 'HomeController@hire-angularjs-developer');
Route::get('/hire-fullstack-developer', 'HomeController@hire-fullstack-developer');
Route::get('/hire-python-developer', 'HomeController@hire-python-developer');
Route::get('/hire-dotnet-developer', 'HomeController@hire-dotnet-developer');
Route::get('/hire-drupal-developer', 'HomeController@hire-drupal-developer');
Route::get('/hire-sofwaretester', 'HomeController@hire-sofwaretester');
Route::get('/hire-digitalmarketer', 'HomeController@hire-digitalmarketer');
Route::get('/hire-support-team', 'HomeController@hire-support-team');

// career menu
Route::get('/career', 'HomeController@career');
Route::get('/career-details-fullstack', 'HomeController@career_details_fullstack');
Route::get('/career-details-flutter', 'HomeController@career_details_flutter');
Route::get('/career-details-php', 'HomeController@career_details_php');
Route::get('/career-details-laravel', 'HomeController@career_details_laravel');
Route::get('/career-details-ios', 'HomeController@career_details_ios');
Route::get('/career-details-bde', 'HomeController@career_details_bde');
Route::get('/career-details-fresher', 'HomeController@career_details_fresher');