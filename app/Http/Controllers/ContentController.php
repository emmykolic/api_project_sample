<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContentController extends Controller
{
    public function index() {
        // $apiKey = 'test_tf5WlMc5yVwKWk6dsQoeS4Qmz9mCkk8rZVnzCjjZ'; // Replace with your actual API key
        // $apiUrl = 'https://api.nettoolkit.com/v1/account/test-api-keys'; // Replace with the API URL

        $apiKey = 'test_tf5WlMc5yVwKWk6dsQoeS4Qmz9mCkk8rZVnzCjjZ';
        $apiUrl = 'https://api.nettoolkit.com/v1/account/test-api-keys';

        $response = Http::get($apiUrl, [
            'api_key' => $apiKey,
            // Add other parameters as needed
        ]);

        $data = $response->json();

        return view('consume', ['data' => $data]);
    }
}