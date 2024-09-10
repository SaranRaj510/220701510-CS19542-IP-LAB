<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User mode</title>
    <style>
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('EMimage/homepage.jpg');
        }

        .container {
            text-align: center;
            background: linear-gradient(to right, #E63946, #F1E9DA);
            box-shadow: 5px 5px 10px white;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
    
        <h1><i class="fa-solid fa-graduation-cap"></i> College Event Management System</h1>
        <button id="adminBtn"> <i class="fa-solid fa-chalkboard-user"></i>  Admin Login</button>
        <button id="studentBtn"><i class="fa-solid fa-user"></i> Student Login</button>
    </div>
    <style>
    i{
        padding-right:10px;
    }
    h1{
        color: black;
    }
    #adminBtn{
        display: inline-block;
            padding: 10px 20px;
            background-color: #81A4CD;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
    }
    #studentBtn{
        display: inline-block;
            padding: 10px 20px;
            background-color: #81A4CD;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out;
    }
    #adminBtn:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }
    #studentBtn:hover {
        background-color: #2980b9;
        transform: scale(1.05);
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
            display: inline-block;
            border-radius: 20px;
            margin-top: 50px;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .container.show {
        opacity: 1;
        }
    
    </style>
    <script>
        document.getElementById("adminBtn").addEventListener("click", function() {
            window.location.href = "adminlogin/adminlogin.php"; // Redirect to admin login page
        });

        document.getElementById("studentBtn").addEventListener("click", function() {
            window.location.href = "studentlogin/login.php"; // Redirect to student login page
        });

        setTimeout(function() {
        document.querySelector('.container').classList.add('show');
        }, 100);
    </script>
    <script src="https://kit.fontawesome.com/47326d26e9.js" crossorigin="anonymous"></script>
</body>
</html>
