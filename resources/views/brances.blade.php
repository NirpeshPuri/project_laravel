@extends('layouts.frontend_master')
@section('title','Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nirpesh Book Store - Branches</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .branch {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .branch h2 {
            margin-top: 0;
        }
        .branch p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nirpesh Book Store - Branches</h1>
        
        <div class="branch">
            <h2>Kathmandu</h2>
            <p><strong>Address:</strong> Kathmandu, Bagmati Province, Nepal</p>
            <p><strong>Phone:</strong> +977 1 1234567</p>
            <p><strong>Email:</strong> kathmandu@nirpeshbookstore.com</p>
            <p><strong>Description:</strong> The capital city of Nepal, known for its rich history, vibrant culture, and UNESCO World Heritage Sites such as Swayambhunath and Pashupatinath Temple.</p>
        </div>

        <div class="branch">
            <h2>Pokhara</h2>
            <p><strong>Address:</strong> Pokhara, Gandaki Province, Nepal</p>
            <p><strong>Phone:</strong> +977 61 234567</p>
            <p><strong>Email:</strong> pokhara@nirpeshbookstore.com</p>
            <p><strong>Description:</strong> A popular tourist destination famous for its stunning lakes, adventure activities, and breathtaking views of the Annapurna mountain range.</p>
        </div>

        <div class="branch">
            <h2>Bhaktapur</h2>
            <p><strong>Address:</strong> Bhaktapur, Bagmati Province, Nepal</p>
            <p><strong>Phone:</strong> +977 1 3456789</p>
            <p><strong>Email:</strong> bhaktapur@nirpeshbookstore.com</p>
            <p><strong>Description:</strong> Known for its well-preserved medieval architecture, intricate wood carvings, and vibrant festivals. Bhaktapur Durbar Square is a major attraction.</p>
        </div>

        <div class="branch">
            <h2>Chitwan</h2>
            <p><strong>Address:</strong> Chitwan, Narayani Province, Nepal</p>
            <p><strong>Phone:</strong> +977 56 456789</p>
            <p><strong>Email:</strong> chitwan@nirpeshbookstore.com</p>
            <p><strong>Description:</strong> Home to Chitwan National Park, a UNESCO World Heritage Site, renowned for its diverse wildlife, including the Bengal tiger, one-horned rhinoceros, and various bird species.</p>
        </div>

        <div class="branch">
            <h2>Lumbini</h2>
            <p><strong>Address:</strong> Lumbini, Lumbini Province, Nepal</p>
            <p><strong>Phone:</strong> +977 71 567890</p>
            <p><strong>Email:</strong> lumbini@nirpeshbookstore.com</p>
            <p><strong>Description:</strong> The birthplace of Lord Buddha and a significant pilgrimage site for Buddhists. Lumbini features ancient monasteries, stupas, and the sacred Bodhi tree.</p>
        </div>

    </div>
</body>
</html>

@endsection