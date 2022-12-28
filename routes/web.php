<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use App\Http\Controllers\MataKuliahController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MataKuliahController::class, 'index']);
// Route::get('/faker', function(){
//     $faker = Faker::create('id_ID');
//     echo $faker->name;
//     echo "<br>";
//     echo $faker->address;
//     echo "<br>";
//     echo $faker->safeEmail;
//     echo "<br>";
// });

    


