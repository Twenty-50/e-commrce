<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="verify.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="tel" name="phone"  placeholder="phone" required>
                <i class='bx bx-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock'></i>
            </div>
            <div class="remeber-forget">
                <label> <input type="checkbox"> Remember me </label>
                <a href="#">Forget password?</a>
            </div>
            <button type="submit" class="btn" onclick="myfunction2()">Login</button>
            <script>
                function myfunction2(){
                window.location.href="../seemore/seemore.php";}
            </script>

            <div class="register-link">
                <p>Don't have an any account? <a href="../regPage/register.php">Register</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>