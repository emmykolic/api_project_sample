<!DOCTYPE html>
<html>
<head>
    <title>Consume API</title>
    {{-- CSS Framework --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
    .looped-div {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f0f0f0;
    }

    .content-item {
        min-width: 200px;
        min-height: 150px;
        background-color: #3498db;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
<body>
    {{-- <img src="{{ $message }}" alt="" srcset=""> --}}
    {{-- @foreach ($info as $item)
        <li>{{ $item['type'] }}</li>
    @endforeach --}}
    {{-- @for ($i = 0; $i < 3; $i++)
        <div class="box mx-5">
           <h3>{{ $type }}</h3>
           <p>{{ $setup }}</p>
           <p>{{ $punchline }}</p>
        </div>
    @endfor --}}
    <!-- resources/views/content/index.blade.php -->
    {{-- @extends('layouts.app')


       



    {{-- CSS Framework JavaScript Cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
    <h1>API Data:</h1>
    <pre>
        {{ json_encode($data, JSON_PRETTY_PRINT) }}
    </pre>
</body>
</html>
