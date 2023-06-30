<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlackController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Hello, World!',
            'country'=>'Nigeria'
        ];

        return response()->json($data);
    }
}
