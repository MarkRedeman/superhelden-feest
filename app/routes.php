<?php
Former::framework('TwitterBootstrap3');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
    $heros = [
        'aquaman', 'wolverine', 'rogue',
        'arrow', 'hulk',
        'captain', 'fantastic', 'mutant', 'nightcrawler', 'superman', 'thor', 'tick', 'xavier',
        'batman', 'venom',
        'deadpool', 'flash', 'galacticus', 'ironman', 'punisher', 'spider',
    ];
    $hero = $heros[array_rand($heros)];
	return View::make('index')->withHero($hero);
});

Route::post('register', function()
{

});