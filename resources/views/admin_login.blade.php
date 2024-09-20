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
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-weight: bold;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 400px;
            padding: 30px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 2px solid #fff;
        }

        input[type=text], input[type=password] {
            width: calc(100% - 24px);
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background: #fff;
            color: #333;
        }
        
        button {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            padding: 15px 20px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            color: white;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            color: #ddd;
        }

        .login-title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="bg-image"></div>

    <div class="bg-text">
        <img src="{{ asset('images/cmc.png') }}" class="avatar" alt="CMC Logo">
        <div class="login-title">ADMIN PANEL</div>
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
