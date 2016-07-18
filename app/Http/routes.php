<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('hackathons', 'HomeController@hackathons');

Route::get('faq', 'HomeController@faq');

Route::get('code4tech', 'HomeController@code4tech');

Route::get('program', 'HomeController@program');

Route::get('teams', 'TeamsController@index');
