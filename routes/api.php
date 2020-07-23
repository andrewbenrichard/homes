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
        /* chef */
        Route::get('chef', 'ApiController@chef');
        Route::post('post/chef', 'ApiController@ChefStore');

        /* category */
        Route::get('categories', 'ApiController@adminCategories');
        Route::get('single/project/{slug}', 'ApiController@singleProject');
        Route::post('post/category', 'ApiController@CategoryStore');
        Route::delete('delete/project/{id}', 'ApiController@ProjectDelete');

        /* Testimonial */
        Route::get('testimonials', 'ApiController@adminTestimonial');
        Route::get('single/testimonial/{slug}', 'ApiController@singleTestimonial');
        Route::post('post/testimonial', 'ApiController@TestimonialStore');
        Route::delete('delete/testimonial/{id}', 'ApiController@TestimonialDelete');

        /* delivery */
        Route::get('deliveries', 'ApiController@adminDeliveries');
        Route::get('single/project/{slug}', 'ApiController@singleProject');
        Route::post('post/delivery_type', 'ApiController@DeliveryStore');
        Route::delete('delete/project/{id}', 'ApiController@ProjectDelete');
        /* meals */
        Route::get('meals', 'ApiController@adminMeals');
        Route::get('single/meal/{slug}', 'ApiController@singleMeal');
        Route::post('post/meal', 'ApiController@MealStore');
        Route::delete('delete/meal/{id}', 'ApiController@MealDelete');
        /* donaion */
        Route::post('post/donation', 'ApiController@saveDonation');
        Route::get('donations', 'ApiController@donations');
        Route::delete('delete/donation/{id}', 'ApiController@DonateDelete');
        /* articles */
        Route::get('articles', 'ApiController@articles');
        Route::get('single/article/{slug}', 'ApiController@singleArticle');
        Route::post('post/article', 'ApiController@ArticleStore');
        Route::delete('delete/article/{id}', 'ApiController@ArticleDelete');
        /* gallery */
        Route::get('galleries', 'ApiController@galleries');
        Route::delete('delete/gallery/{id}', 'ApiController@GalleryDelete');
        Route::post('post/gallery', 'ApiController@GalleryStore');
       
});
/* 

for front end side

*/
Route::group(['prefix'=> 'sc_front','namespace' => 'API'], function(){
        /* category */
        Route::get('categories', 'ApiController@frontCategories');
        Route::get('chef', 'ApiController@chef');
        Route::get('top_article', 'ApiController@FrontTopArticle');
        Route::get('articles_mini', 'ApiController@FrontArticlesMini');
        Route::get('testimonials', 'ApiController@frontTestimonials');

        /* delivery */
        Route::get('deliveries', 'ApiController@adminDeliveries');
        Route::get('single/deliveries/{slug}', 'ApiController@singleProject');
        /* meals */
        Route::get('meals', 'ApiController@frontMeals');
        Route::get('single/meal/{slug}', 'ApiController@frontSingleMeal');
      
        /* articles */
        Route::get('articles', 'ApiController@articles');
        Route::get('single/article/{slug}', 'ApiController@singleArticle');
        Route::post('post/article', 'ApiController@ArticleStore');
        Route::delete('delete/article/{id}', 'ApiController@ArticleDelete');
     
       
});
// Route::apiResources(['user' => 'API\UserController']);
