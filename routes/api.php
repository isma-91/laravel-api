<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', 'Api\Postcontroller@index')->name('posts.index');
Route::get('/posts/{post}', 'Api\Postcontroller@show')->name('posts.show');
/*
tutte queste rotte in api.php mette in automatico al percorso "api" come prima voce, quindi queste 2 rotte appena create stanno per:
api/posts e api/posts/{post}
*/
