<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background: #5F9EA0;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
            margin: 40px auto 0 auto;
            width: 350px;
        }
        form {
            background: #fff;
            padding: 30px;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 350px;
            margin: 0 auto;
        }
        .input-group {
            margin: 10px 0 20px 0;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .btn {
            background: #5F9EA0;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #4682B4;
        }
        p {
            text-align: center;
            margin-top: 15px;
        }
        a {
            color: #5F9EA0;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>register</h2>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
      
        </p>
    </form>
</body>
</html>