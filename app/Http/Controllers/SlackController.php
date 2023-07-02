<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SlackController extends Controller
{
    public function welcome()
    {
        $response = Http::get('https://official-joke-api.appspot.com/random_joke');
        $data = $response->json();
            
        return view('welcome', ['data' => $data]);


        // $data = [
        //     'code' => '0',
        //     'message'=>'Unauthorized'
        // ];

        

        // return response()->json($data);
    }
}
