<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SlackController;
use Illuminate\Support\Facades\Http;

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

Route::get('/', [SlackController::class, 'index']);


Route::get('/consume', function () {
    $response = Http::get('https://api.slack.com/web');
    $data = $response->json();

    return view('consume', ['message' => $data['message']]);
});