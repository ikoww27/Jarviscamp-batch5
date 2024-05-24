<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile {
            margin-bottom: 20px;
        }

        .profile img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .profile h2 {
            margin: 10px 0 0;
        }

        .profile p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="profile">
            <img src="{{ asset('assets/IMG_3696.JPG') }}" alt="foto">
            <h2>Muhammad Iko Wardhana</h2>
            <p>Kuliah di Universitas Islam Sultan Agung Semarang</p>
        </div>
    </div>
    </div>
</body>

</html>