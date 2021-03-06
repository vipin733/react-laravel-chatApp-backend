<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/chat_list', 'Api\MessageChannelController@chatList');
Route::middleware('auth:api')->get('/messages/{channelId}', 'Api\MessageChannelController@messages');
Route::middleware('auth:api')->post('/send_message/{channelId}', 'Api\MessageChannelController@send_message');
