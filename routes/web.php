<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/consume', [ContentController::class,'index']);


// Route::get('/consume', function () {
//     $responses = Http::get('https://official-joke-api.appspot.com/random_joke');
//     $info = $responses->json();
//     // $response = Http::get('https://dog.ceo/api/breeds/image/random');
//     // $data = $response->json();

//     return view('consume', 
//     // ['message' => $data['message']],
//     // ['status'=>$data['status']],

//     ['type' => $info['type']],
//     ['setup' => $info['setup']],
//     ['punchline' => $info['punchline']],
//     ['id' => $info['id']]
//     );

    
// });