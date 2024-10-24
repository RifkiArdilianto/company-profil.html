<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto; /* Center form horizontally */
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login skuyy</h1>
        <form action="./../backend/login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="email" required/>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password" required/>

            <div class="error-message" id="error-message"></div>
            
            <button type="submit">Login</button>
        </form>
    </div>
    
    <script>
        // Contoh untuk menampilkan pesan kesalahan
        // const errorMessage = document.getElementById('error-message');
        // errorMessage.textContent = 'Email atau password salah';
    </script>
</body>
</html>
