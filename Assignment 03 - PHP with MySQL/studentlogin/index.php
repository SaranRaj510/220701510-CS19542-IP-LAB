<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Page</title>
<style>
body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.navbar {
    display: flex;
    justify-content: space-between;
    background-color: #333;
    border-radius: 5px;
    padding: 10px;
}

.navbar a {
    color: #fff;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
}

.navbar a:hover {
    background-color: #555;
}

.content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}

.footer {
    text-align: center;
    margin-top: 20px;
    color: #777;
}
li{
    list-style: none;
    padding-top: 10px;
    font-size: 20px;
}
i{
    padding-right: 10px;
    font-size: 30px;
}
</style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Welcome Student</h1>
    </div>
    <div class="navbar">
    <a href="#" class="menu-bar" onclick="showhome()">Home</a>
    <a href="#" class="menu-bar" onclick="showregister()">Register for Events</a>
    <a href="#" class="menu-bar" onclick="showcontact()">contact us</a>
    <a href="login.php">logout</a>
                        
    </div>
    <div id="home">
        <h2>Home</h2>
        <p>The College Event Management System is a comprehensive platform designed to streamline and enhance the planning, organization, and execution of various events within a college or university setting. It encompasses a range of features and functionalities aimed at simplifying event management tasks, improving communication, and ensuring successful events. .</p>
        <div class="footer">
        <p>&copy; SK College Event Management System</p>
    </div>
    </div>
    

        
    <div id="addevent">
        <h2>Register for Events</h2>
        <ul class="accordion">
            <li>
                <input type="radio" name="accordion" id="first">
                <label for="first">Cultural Events</label>
                <div class="content">
                    <p>These include music concerts, dance performances, drama plays, fashion shows, and talent competitions</p>
                    <img src="studentimage/cultural.jpg">
                    <a href="culturalevents.php">Register for Cultural event</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">Sports Events</label>
                <div class="content">
                    <p>Colleges often organize sports tournaments, athletic meets, and intercollegiate sports competitions in various disciplines like football, basketball, cricket, athletics, etc.</p>
                    <img src="studentimage/sports.jpg">
                    <a href="sportsevent.php">Register for sports event</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">Academic Events</label>
                <div class="content">
                    <p>These include seminars, workshops, conferences, symposiums, and guest lectures by experts in different fields.</p>
                    <img src="studentimage/academic.jpg">
                    <a href="academicevent.php">Register for academic event</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">Alumni Events</label>
                <div class="content">
                    <p>Colleges may organize alumni reunions, networking events, and alumni mentorship programs.</p>
                    <img src="studentimage/alumini.jpg">
                    <a href="alumnievent.php">Register for alumni event</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth">Placement and Training Events</label>
                <div class="content">
                    <p>These include job fairs, campus recruitment drives, career counseling sessions, and resume-building workshops.</p>
                    <img src="studentimage/placement.jpg">
                    <a href="placementevent.php">Register for Placement and Training event</a>
                </div>
            </li>
        </ul>
        
    </div>
    



    
    
    <div id="contactus">
        <h1> contact</h1>
        <ul>
            <li><i class="fa-solid fa-user"></i> Kaviarasu.M</li>
            <li><i class="fa-solid fa-phone"></i> 9360108857</li>
            <li><i class="fa-solid fa-envelope"></i> 220701517@rajalakshmi.edu.in</li>

            <li><i class="fa-solid fa-user"></i> Saranraj.A</li>
            <li><i class="fa-solid fa-phone"></i> 8248823072</li>
            <li><i class="fa-solid fa-envelope"></i> 220701510@rajalakshmi.edu.in</li>
        </ul>
    </div>


    
</div>

    
<style>
    a{
        color: white;
        text-align: center;
        cursor: pointer;
    }
    #addevent{
        display: none;
    }
    #addedevent{
        display: none;
    }
    #contactus{
        display: none;
    }
    img{
        width: 35%;
    }
    #addevent{
    padding: 10px 12%;
    text-align: center;
    font-size: 35px;
    font-weight: 600;
}

#addedevent{
    padding: 10px 12%;
    text-align: center;
    font-size: 35px;
    font-weight: 600;
}
.accordion{
    margin: 60px auto;
    width: 100%;
    max-width: 750px;
}
.accordion li{
    list-style: none;
    width: 100%;
    padding: 5px;
}
.accordion p{
    font-size: 23px;
    font-weight: 500;
}
.accordion li label{
    display: flex;
    align-items: center;
    padding: 20px;
    font-size: 23px;
    font-weight: 500;
    background: #303030;
    margin-bottom: 2px;
    cursor: pointer;
    position: relative;
}
label::after{
    content: '+';
    font-size: 34px;
    position: absolute;
    right: inherit;
    right: 20px;
    transition: transform 0.5s;
}
input[type="radio"]{
    display: none;
}
.accordion .content{
    background: #303030;
    text-align: left;
    padding: 0 20px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s, padding 0.5s;
}
.accordion input[type="radio"]:checked + label +.content{
    max-height: 600px;
    padding: 30px;

}
.accordion input[type="radio"]:checked + label::after{
    transform: rotate(135deg);
}

#addevent{
    font-size: 23px;
    color: white;
}
#addevent h2{
    color: black;
}

#addedevent{
    font-size: 23px;
    color: white;
}
#addedevent h2{
    color: black;
}

body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('studentimage/adminhomebg.jpg');
}
</style>
<script>
    function showhome(){
    document.getElementById('home').style.display='block';
    document.getElementById('addevent').style.display='none';
    document.getElementById('contactus').style.display='none';
}

function showregister(){
    document.getElementById('home').style.display='none';
    document.getElementById('addevent').style.display='block';
    document.getElementById('contactus').style.display='none';
}

function showcontact(){
    document.getElementById('home').style.display='none';
    document.getElementById('addevent').style.display='none';
    document.getElementById('contactus').style.display='block';
}
</script>

<script src="https://kit.fontawesome.com/47326d26e9.js" crossorigin="anonymous"></script>

</body>
</html>
