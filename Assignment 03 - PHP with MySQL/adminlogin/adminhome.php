<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Page</title>
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
a{
    color: black;
}
</style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Welcome Admin</h1>
    </div>
    <div class="navbar">
    <a href="#" class="menu-bar" onclick="showhome()">Home</a>
    <a href="#" class="menu-bar" onclick="showevent()">Add Event</a>
    <a href="#" class="menu-bar" onclick="showaddedevent()">Added Events</a>
    <a href="#" class="menu-bar" onclick="showstdregister()">Register Student List</a>
    <a href="#" class="menu-bar" onclick="showcontact()">contact us</a>
    <a href="adminlogin.php">logout</a>
                        
    </div>
    <div id="home">
        <h2>Home</h2>
        <p>The College Event Management System is a comprehensive platform designed to streamline and enhance the planning, organization, and execution of various events within a college or university setting. It encompasses a range of features and functionalities aimed at simplifying event management tasks, improving communication, and ensuring successful events. .</p>
        
        <div class="footer">
        

        <p>&copy; SK College Event Management System</p>
        
    </div>
    </div>
    

        
    <div id="addevent">
        <h2>Add Events</h2>
        <ul class="accordion">
            <li>
                <input type="radio" name="accordion" id="first">
                <label for="first">Cultural Events</label>
                <div class="content">
                    <p>These include music concerts, dance performances, drama plays, fashion shows, and talent competitions</p>
                    <img src="adminimage/cultural.jpg">
                    <a href="culturals.php">Add culturals</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">Sports Events</label>
                <div class="content">
                    <p>Colleges often organize sports tournaments, athletic meets, and intercollegiate sports competitions in various disciplines like football, basketball, cricket, athletics, etc.</p>
                    <img src="adminimage/sports.jpg">
                    <a href="sports.php">Add sports event</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">Academic Events</label>
                <div class="content">
                    <p>These include seminars, workshops, conferences, symposiums, and guest lectures by experts in different fields.</p>
                    <img src="adminimage/academic.jpg">
                    <a href="academic.php">Add academic event</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">Alumni Events</label>
                <div class="content">
                    <p>Colleges may organize alumni reunions, networking events, and alumni mentorship programs.</p>
                    <img src="adminimage/alumini.jpg">
                    <a href="alumni.php">Add alumni event</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth">Placement and Training Events</label>
                <div class="content">
                    <p>These include job fairs, campus recruitment drives, career counseling sessions, and resume-building workshops.</p>
                    <img src="adminimage/placement.jpg">
                    <a href="placement.php">Add Placement and Training event</a>
                </div>
            </li>
        </ul>
        
    </div>
    



    <div id="addedevent">
        <h2>Added Events</h2>
        <ul class="accordion">
            <li>
                <input type="radio" name="accordion" id="sixth">
                <label for="sixth">Cultural Events</label>
                <div class="content">
                    <p>These include music concerts, dance performances, drama plays, fashion shows, and talent competitions</p>
                    <img src="adminimage/cultural.jpg">
                    <a href="addedculturalsevent.php">Added cultural events</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="seventh">
                <label for="seventh">Sports Events</label>
                <div class="content">
                    <p>Colleges often organize sports tournaments, athletic meets, and intercollegiate sports competitions in various disciplines like football, basketball, cricket, athletics, etc.</p>
                    <img src="adminimage/sports.jpg">
                    <a href="addedsportevent.php">Added sports event</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="eighth">
                <label for="eighth">Academic Events</label>
                <div class="content">
                    <p>These include seminars, workshops, conferences, symposiums, and guest lectures by experts in different fields.</p>
                    <img src="adminimage/academic.jpg">
                    <a href="addedacademicevent.php">Added academic event</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="ninth">
                <label for="ninth">Alumni Events</label>
                <div class="content">
                    <p>Colleges may organize alumni reunions, networking events, and alumni mentorship programs.</p>
                    <img src="adminimage/alumini.jpg">
                    <a href="addedalumnievent.php">Added alumni event</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="tenth">
                <label for="tenth">Placement and Training Events</label>
                <div class="content">
                    <p>These include job fairs, campus recruitment drives, career counseling sessions, and resume-building workshops.</p>
                    <img src="adminimage/placement.jpg">
                    <a href="addedplacementevent.php">Added Placement and Training event</a>
                </div>
            </li>
        </ul>
        
    </div>
    

    <div id="studentregisterevent">
        <h2>Student Register Events</h2>
        <ul class="accordion">
            <li>
                <input type="radio" name="accordion" id=" Eleven">
                <label for=" Eleven">Cultural Events</label>
                <div class="content">
                    <p>These include music concerts, dance performances, drama plays, fashion shows, and talent competitions</p>
                    <img src="adminimage/cultural.jpg">
                    <a href="culturalsregisterstudents.php">Registered list of cultural events</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="Twelve">
                <label for="Twelve">Sports Events</label>
                <div class="content">
                    <p>Colleges often organize sports tournaments, athletic meets, and intercollegiate sports competitions in various disciplines like football, basketball, cricket, athletics, etc.</p>
                    <img src="adminimage/sports.jpg">
                    <a href="sportsregisterstudent.php">Registered list of sports events</a>
                </div>
            </li>
            
            <li>
                <input type="radio" name="accordion" id="Thirteen">
                <label for="Thirteen">Academic Events</label>
                <div class="content">
                    <p>These include seminars, workshops, conferences, symposiums, and guest lectures by experts in different fields.</p>
                    <img src="adminimage/academic.jpg">
                    <a href="academicregisterstudent.php">Registered list of academic events</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id="Fourteen">
                <label for="Fourteen">Alumni Events</label>
                <div class="content">
                    <p>Colleges may organize alumni reunions, networking events, and alumni mentorship programs.</p>
                    <img src="adminimage/alumini.jpg">
                    <a href="alumniregisterstudent.php">Registered list of alumni events</a>
                </div>
            </li>

            <li>
                <input type="radio" name="accordion" id=" Fifteen">
                <label for=" Fifteen">Placement and Training Events</label>
                <div class="content">
                    <p>These include job fairs, campus recruitment drives, career counseling sessions, and resume-building workshops.</p>
                    <img src="adminimage/placement.jpg">
                    <a href="placementregisterstudent.php">Registered list of Placement events</a>
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
    #studentregisterevent{
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
#studentregisterevent{
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

#studentregisterevent{
    font-size: 23px;
    color: white;
}
#studentregisterevent h2{
    color: black;
}

body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('adminimage/adminhomebg.jpg');
}
</style>
<script>
    function showhome(){
    document.getElementById('home').style.display='block';
    document.getElementById('addevent').style.display='none';
    document.getElementById('addedevent').style.display='none';
    document.getElementById('studentregisterevent').style.display='none';
    document.getElementById('contactus').style.display='none';
}

function showevent(){
    document.getElementById('home').style.display='none';
    document.getElementById('addevent').style.display='block';
    document.getElementById('addedevent').style.display='none';
    document.getElementById('studentregisterevent').style.display='none';
    document.getElementById('contactus').style.display='none';
}

function showaddedevent(){
    document.getElementById('home').style.display='none';
    document.getElementById('addevent').style.display='none';
    document.getElementById('addedevent').style.display='block';
    document.getElementById('studentregisterevent').style.display='none';
    document.getElementById('contactus').style.display='none';
}

function showstdregister(){
    document.getElementById('home').style.display='none';
    document.getElementById('addevent').style.display='none';
    document.getElementById('addedevent').style.display='none';
    document.getElementById('studentregisterevent').style.display='block';
    document.getElementById('contactus').style.display='none';
}

function showcontact(){
    document.getElementById('home').style.display='none';
    document.getElementById('addevent').style.display='none';
    document.getElementById('addedevent').style.display='none';
    document.getElementById('studentregisterevent').style.display='none';
    document.getElementById('contactus').style.display='block';
}
</script>

<script src="https://kit.fontawesome.com/47326d26e9.js" crossorigin="anonymous"></script>

</body>
</html>
