<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Background image styling */
            .bg-custom {
                background-image: url('{{ asset('images/online.webp') }}'); 
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            /* Button styling - Blue buttons */
            .btn {
                padding: 1rem 2rem;
                font-size: 1.25rem;
                font-weight: bold;
                color: white;
                background-color: #007bff; /* Blue color */
                border-radius: 8px;
                text-transform: uppercase;
                text-decoration: none;
                margin: 0.5rem;
                transition: background-color 0.3s ease;
            }

            .btn:hover {
                background-color: #0056b3; 
            }

            /* Container for buttons */
            .welcome-container {
                text-align: center;
                color: white;
            }

            .welcome-container h1 {
                font-size: 3rem;
                margin-bottom: 2rem;
            }

            /* Footer styling
            footer {
                position: absolute;
                bottom: 10px;
                width: 100%;
                text-align: center;
                color: white;
                font-size: 1rem;
            } */
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Full Page Background with Centered Content -->
        <div class="bg-custom">
            <div class="welcome-container">
                <h1>Welcome to Our Website</h1>
                <div>
                    <!-- Login Button -->
                    <a href="{{ route('login') }}" class="btn">Login</a>

                    <!-- Register Button -->
                    <a href="{{ route('register') }}" class="btn">Register</a>
                </div>
            </div>
            <!-- <footer>
                Developed for Sinov8
            </footer> -->
        </div>
    </body>
</html>
