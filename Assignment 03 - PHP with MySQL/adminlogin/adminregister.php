<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Registration</title>
</head>
<body>
    <div id="rbody">
    <h1 class="head"><i class="fa-solid fa-chalkboard-user"></i> Admin Register</h1>
    <div class="container">
    <form action="adminconnect.php" method="POST">
        
        <label for="staffid">staffid:</label><br>
        <input type="text" id="staffid" name="staffid" required><br>
        <label for="staffname">staffname:</label><br>
        <input type="text" id="staffname" name="staffname" required><br>
        <label for="collegename">College Name:</label><br>
        <input type="text" id="collegename" name="collegename" required><br>
        <label for="dept">Department:</label><br>
        <input type="text" id="dept" name="dept" required><br>
        <label for="phonenumber">Phone Number:</label><br>
        <input type="text" id="phonenumber" name="phonenumber" required><br>
        <label for="mailid">Email:</label><br>
        <input type="email" id="mailid" name="mailid" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="adminlogin.php">Login</a></p>
    </div>
    </div>
    <style>
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('adminimage/login.jpg');
        }
        .head{
            color: white;
        }
         i{
        padding-right:10px;
        }  
        #rbody{
            text-align: center;
            align-items: center;
        }
        
        #rbody{
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
            margin-top: 50px;
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

