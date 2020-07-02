<?php

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//Callback Passport



Route::get('/auth/passport', function () {
    $query = http_build_query([
       'client_id' => '3',
       'redirect_uri' => 'http://id.mangaplay.com/callback',
       'response_type' => 'code',
       'scope' => ''
     ]);

    return redirect('http://passport.com/oauth/authorize?'.$query);
});


Route::get('/callback', function (Request $request) {
   $http = new GuzzleHttp\Client;

   $response = $http->post('http://passport.com/oauth/token', [
       'form_params' => [
           'grant_type' => 'authorization_code',
           'client_id' => '3',
           'client_secret' => 'trdbjMV5jWgH8cgINUPhur0EjLyV2vyE9vDByRwt',
           'redirect_uri' => 'http://id.mangaplay.com/callback',
           'code' => $request->code
       ],
   ]);
   
   $body = json_decode((string) $response->getBody(), true);

   $response = $http->get('http://passport.com/api/user', [
     'headers' => [
           'Authorization' => 'Bearer ' . $body['access_token'],
       ],
   ]);





   return json_decode((string) $response->getBody(), true);
});


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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/email', 'HomeController@email')->name('email');
Route::get('/phone', 'HomeController@phone')->name('phone');

//session
Route::get('/Session', function() {
    session()->put('Ten','Name');
        echo "ok";




});


