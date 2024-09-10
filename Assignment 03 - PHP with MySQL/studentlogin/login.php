<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="body">
        <h1 class="title"><i class="fa-solid fa-user"></i> Student Login</h1>
        <div class="container">
    <h1>Login</h1>
      
    <form action="loginaccess.php" method="POST">
        <label for="mailid">Username:</label><br>
        <input type="text" id="mailid" name="mailid" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
    </div>
    <style>
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('studentimage/login.jpg');
        }
        .title{
            color: white;
        }
        i{
        padding-right:10px;
        }
        #body{
            text-align: center;
            align-items: center;
        }
        
        #body{
            opacity: 0;
            animation: fadeInFromTop 1.5s ease forwards; 
        }

    @keyframes fadeInFromTop {
        0% {
        opacity: 0;
        transform: translateY(-50px); 
        }
        100% {
        opacity: 1;
        transform: translateY(0); 
        }
    }
    
    
    .container{
            padding: 50px 20px;
            background: linear-gradient(to right, #A3E7FC, #F1F7ED, #A7ADC6);
            display: inline-block;
            border-radius: 20px;
            margin-top: 100px;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            box-shadow: 5px 5px 10px white;
        }
        .container.show {
        opacity: 1;
        }
        
    </style>
    <script>
        setTimeout(function() {
        document.querySelector('.container').classList.add('show');
        }, 100);
</script>
<script src="https://kit.fontawesome.com/47326d26e9.js" crossorigin="anonymous"></script>
</body>
</html>


