<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            text-align: center;
            position: relative;
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1713170861232-bb89bd5120f9?q=80&w=3087&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); 
            background-size: cover;
            opacity: 0.6; 
            z-index: -1; 
        }

        .welcome-text {
            color: #000000; 
            z-index: 1; 
        }

        .get-started-btn {
            background-color: #691717;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            z-index: 1; 
        }

        .get-started-btn:hover {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="background-image" style="background-image: url(./images/cover.jpg);">
            <img class="background-image" src="https://images.unsplash.com/photo-1713170861232-bb89bd5120f9?q=80&w=3087&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="background-image"  style="width: 100%; height: 100%;">
        </div>
        
        <h1 class="welcome-text">Welcome to Your Contact Management App</h1>
        <p class="welcome-text">Organize your contacts efficiently and stay connected!</p>
        <a href="{{ route('contacts.index') }}" class="get-started-btn">Get Started!</a>
    </div>
</body>
</html>
