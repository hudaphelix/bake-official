<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bakery Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      height: 100vh;
      background: url('back3.avif') no-repeat center top;
      background-size: cover;
      background-attachment: fixed;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      padding: 40px 35px;
      border-radius: 16px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      text-align: center;
      transition: transform 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .login-box:hover {
      transform: translateY(-5px);
    }

    .login-box h2 {
      margin-bottom: 25px;
      color: brown;
      font-family: 'Sansita Swashed', cursive;
      font-size: 28px;
    }

    .login-box input {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      transition: box-shadow 0.3s ease;
    }

    .login-box input:focus {
      outline: none;
      box-shadow: 0 0 8px rgba(161, 78, 44, 0.6);
    }

    .login-box button {
      background-color: #a14e2c;
      color: white;
      border: none;
      padding: 14px 30px;
      font-size: 16px;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 15px;
      transition: all 0.3s ease;
      width: 100%;
    }

    .login-box button:hover {
      background-color: #823c1b;
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(161, 78, 44, 0.3);
    }

    .login-box input::placeholder {
      color: #555;
      opacity: 0.8;
    }

    @media (max-width: 500px) {
      .login-box {
        padding: 30px 20px;
      }

      .login-box h2 {
        font-size: 24px;
      }

      .login-box input,
      .login-box button {
        font-size: 15px;
        padding: 12px;
      }
    }

    @media (max-width: 320px) {
      .login-box h2 {
        font-size: 20px;
      }

      .login-box input,
      .login-box button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <form class="login-box" action="validate.php" method="POST">
    <h2>Login to Huda's Bakery</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>

</body>
</html>
