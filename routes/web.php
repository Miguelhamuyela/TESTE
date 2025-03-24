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
//Empresas
/*
Route::get('empresas', ['as' => 'site.company', 'uses' => 'Site\CompanyController@create']);
Route::post('empresas/store', ['as' => 'site.company.store', 'uses' => 'Site\CompanyController@store']);
*/

//participantes
/*
Route::get('participantes', ['as' => 'site.registration', 'uses' => 'Site\RegistrationController@create']);
Route::post('participantes/store', ['as' => 'site.registration.store', 'uses' => 'Site\RegistrationController@store']);
Route::get('participantes/invoice/{code}', ['as' => 'site.registration.invoice', 'uses' => 'Site\RegistrationController@invoice']);
*/

Route::get('/', ['as' => 'site.home', 'uses' => 'Site\SiteController@index']);

/* agenda */
Route::get('/agenda', ['as' => 'site.schedule', 'uses' => 'Site\ScheduleController@index']);

Route::get('/sobre', ['as' => 'site.about.index', 'uses' => 'Site\AboutController@index']);

/**speaker */
Route::get('/oradores', ['as' => 'site.speaker', 'uses' => 'Site\SpeakerController@index']);
Route::get('/oradores/{name}', ['as' => 'site.speaker.show', 'uses' => 'Site\SpeakerController@show']);

/**speaker */
Route::get('/moderadores', ['as' => 'site.moderators', 'uses' => 'Site\ModeratorsController@index']);

/* faq */
Route::get('/perguntas-frequentes', ['as' => 'site.faq', 'uses' => 'Site\FaqController@index']);

/* gallery */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);

/* contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);
/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';

/*
Route::get('credenciamento/verify/{code}', ['as' => 'admin.credencial.verify', 'uses' => 'Admin\RegistrationController@verify']);
*/
