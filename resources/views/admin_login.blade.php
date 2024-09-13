<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMC Admin Login</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
        }

        * {
            box-sizing: border-box;
        }

        .bg-image {
            background-image: url("{{ asset('images/bg1.png') }}");
            /*filter: blur(1px);
            -webkit-filter: blur(1px); */
            height: 100%;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .bg-text {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 400px;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }

        .avatar {
            vertical-align: middle;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        button {
            background-color: #4CAF50;
            border: none;
            border-radius: 50px;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            color: white;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: #ddd;
        }
    </style>
</head>
<body>

    <div class="bg-image"></div>

    <div class="bg-text">
        <img src="{{ asset('images/cmc.png') }}" class="avatar" alt="CMC Logo">

        <form action="{{ route('admin_login.post') }}" method="POST">
        @csrf

            <input type="text" name="username" placeholder="User Name" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
