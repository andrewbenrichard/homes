<?php

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix'=> 'auth','namespace' => 'API'], function(){
        Route::post('signin', 'Auth\LoginController');
        Route::post('signout', 'Auth\LogoutController');
        Route::get('me', 'Auth\MeController');
});
Route::group(['prefix'=> 'sc_admin','namespace' => 'API'], function(){
        /* booking */
        Route::post('post/booking', 'ApiController@BookingStore');

});
/* 

for front end side

*/
Route::group(['prefix'=> 'sc_front','namespace' => 'API'], function(){
        /* services */
        Route::get('services', 'ApiController@Services');
       
});
// Route::apiResources(['user' => 'API\UserController']);
