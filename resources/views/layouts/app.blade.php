<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Account Book</title>
    <style>
        body {
            background-color: #E2F6CA; /* Light Green */
            color: #333;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #78C1F3; /* Light Blue */
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            color: #FFF;
            margin: 0;
            padding: 10px;
        }
        footer {
            background-color: #9BE8D8; /* Light Teal */
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        footer p {
            color: #FFF;
            margin: 0;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Household Account Book</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 Household Account Book</p>
    </footer>
</body>
</html>