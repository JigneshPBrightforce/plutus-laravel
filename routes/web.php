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
Route::get('/contact-us', 'HomeController@contact_us');

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

// portfolio menu
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/portfolio/{slug}', 'HomeController@portfolioDetials');
Route::get('/rsd_portfolio', 'HomeController@rsd_portfolio');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog-details', 'HomeController@blog_details');
Route::get('/rapidparty_portfolio', 'HomeController@rapidparty_portfolio');
Route::get('/reshyne_portfolio', 'HomeController@reshyne_portfolio');
Route::get('/skilltrade_portfolio', 'HomeController@skilltrade_portfolio');
Route::get('/recovr_portfolio', 'HomeController@recovr_portfolio');
Route::get('/emvite_portfolio', 'HomeController@emvite_portfolio');
Route::get('/agrotrade_portfolio', 'HomeController@agrotrade_portfolio');
Route::get('/powerzada_portfolio', 'HomeController@powerzada_portfolio');
Route::get('/cheekyevent_portfolio', 'HomeController@cheekyevent_portfolio');
Route::get('/cycleai_portfolio', 'HomeController@cycleai_portfolio');
Route::get('/propertyWatch_portfolio', 'HomeController@propertyWatch_portfolio');
Route::get('/msb_portfolio', 'HomeController@msb_portfolio');
Route::get('/nkenne_portfolio', 'HomeController@nkenne_portfolio');
Route::get('/side_stream_portfolio', 'HomeController@side_stream_portfolio');
Route::get('/misal_portfolio', 'HomeController@misal_portfolio');
Route::get('/easyref_portfolio', 'HomeController@easyref_portfolio');
Route::get('/offsite_portfolio', 'HomeController@offsite_portfolio');
Route::get('/bidalift_portfolio', 'HomeController@bidalift_portfolio');
Route::get('/incomtax_portfolio', 'HomeController@incomtax_portfolio');
Route::get('/cycle_ai_portfolio', 'HomeController@cycle_ai_portfolio');
Route::get('/applebees_portfolio', 'HomeController@applebees_portfolio');
Route::get('/simpliworks_portfolio', 'HomeController@simpliworks_portfolio');
// hire resource menu
Route::get('/hire-php-developers', 'HomeController@hire_php_developers');
Route::get('/hire-android-app-developer', 'HomeController@hire_android_app_developer');
Route::get('/hire-ios-app-developer', 'HomeController@hire_ios_app_developer');
Route::get('/hire-wordpress-developer', 'HomeController@hire_wordpress_developer');
Route::get('/hire-magento-app-developer', 'HomeController@hire_magento_app_developer');
Route::get('/hire-uiux-designer', 'HomeController@hire_uiux_designer');
Route::get('/hire-ionic-app-developer', 'HomeController@hire_ionic_app_developer');
Route::get('/hire-reactnative-app-developer', 'HomeController@hire_reactnative_app_developer');
Route::get('/hire-flutter-app-developer', 'HomeController@hire_flutter_app_developer');
Route::get('/hire-nodejs-developer', 'HomeController@hire_nodejs_developer');
Route::get('/hire-reactjs-developer', 'HomeController@hire_reactjs_developer');
Route::get('/hire-angularjs-developer', 'HomeController@hire_angularjs_developer');
Route::get('/hire-fullstack-developer', 'HomeController@hire_fullstack_developer');
Route::get('/hire-python-developer', 'HomeController@hire_python_developer');
Route::get('/hire-dotnet-developer', 'HomeController@hire_dotnet_developer');
Route::get('/hire-drupal-developer', 'HomeController@hire_drupal_developer');
Route::get('/hire-softwaretester', 'HomeController@hire_softwaretester');
Route::get('/hire-digitalmarketer', 'HomeController@hire_digitalmarketer');
Route::get('/hire-support-team', 'HomeController@hire_support_team');

// career menu
Route::get('/career', 'HomeController@career');
Route::get('/career-details-fullstack', 'HomeController@career_details_fullstack');
Route::get('/career-details-bdm', 'HomeController@career_details_bdm');
Route::get('/career-details-flutter', 'HomeController@career_details_flutter');
Route::get('/career-details-php', 'HomeController@career_details_php');
Route::get('/career-details-laravel', 'HomeController@career_details_laravel');
Route::get('/career-details-ios', 'HomeController@career_details_ios');
Route::get('/career-details-bde', 'HomeController@career_details_bde');
Route::get('/career-details-fresher', 'HomeController@career_details_fresher');

// Case study 
Route::get('/one-clickheat', 'HomeController@one_click_heat');

Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/home', function () {
    return redirect('/admin/dashboard');
})->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/admin/portfolio', 'Admin\PortfolioController@index')->name('admin.portfolio');
    Route::get('/admin/portfolio/create', 'Admin\PortfolioController@create')->name('admin.portfolio.create');
    Route::post('/admin/portfolio/save', 'Admin\PortfolioController@store')->name('admin.portfolio.store');
    Route::get('/admin/portfolio/edit/{id}', 'Admin\PortfolioController@edit')->name('admin.portfolio.edit');
    Route::post('/admin/portfolio/update', 'Admin\PortfolioController@update')->name('admin.portfolio.update');
    Route::get('/admin/portfolio/delete/{id}', 'Admin\PortfolioController@destroy')->name('admin.portfolio.delete');

    Route::get('/admin/technology', 'Admin\TechnologyController@index')->name('admin.technology');
    Route::get('/admin/technology/create', 'Admin\TechnologyController@create')->name('admin.technology.create');
    Route::post('/admin/technology/save', 'Admin\TechnologyController@store')->name('admin.technology.store');
    Route::get('/admin/technology/edit/{id}', 'Admin\TechnologyController@edit')->name('admin.technology.edit');
    Route::post('/admin/technology/update', 'Admin\TechnologyController@update')->name('admin.technology.update');
    Route::get('/admin/technology/delete/{id}', 'Admin\TechnologyController@destroy')->name('admin.technology.delete');
    Route::get('/admin/technology/getCategoriesTableData', 'Admin\TechnologyController@getCategoriesTableData')->name('admin.technology.getCategoriesTableData');
    Route::get('/admin/technology/changeStatus/{id}', 'Admin\TechnologyController@changeStatus')->name('admin.technology.changeStatus');


    Route::get('/admin/casestudy', 'Admin\CaseStudyController@index')->name('admin.casestudy');
    Route::get('/admin/casestudy/create', 'Admin\CaseStudyController@create')->name('admin.casestudy.create');
    Route::post('/admin/casestudy/save', 'Admin\CaseStudyController@store')->name('admin.casestudy.store');
    Route::get('/admin/casestudy/edit/{id}', 'Admin\CaseStudyController@edit')->name('admin.casestudy.edit');
    Route::post('/admin/casestudy/update', 'Admin\CaseStudyController@update')->name('admin.casestudy.update');
    Route::get('/admin/casestudy/delete/{id}', 'Admin\CaseStudyController@destroy')->name('admin.casestudy.delete');
});
