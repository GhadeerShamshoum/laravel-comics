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

Route::get('/', function () {
    $array_comics = config('comics');
    return view('comicslist',['comics'=>$array_comics]);
});

Route::get('/comic', function () {
    $array_comics = config('comics');
    return view('comicslist1');
});

// Route::get('/', function () {
//     $links  = [
//             [
//               "text"=> "characters",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "comics",
//               "url"=>"#",
//               "current"=> true,
//             ],
//             [
//               "text"=> "movies",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "Tv",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "games",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "collectibles",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "videos",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "fans",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "news",
//               "url"=>"#",
//               "current"=> false,
//             ],
//             [
//               "text"=> "shop",
//               "url"=>"#",
//               "current"=> false,
//             ]
            
//         ];
//     return view('partails.header',$links);
// });


