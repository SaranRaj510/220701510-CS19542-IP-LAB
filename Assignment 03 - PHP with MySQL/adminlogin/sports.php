<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Sports Event</title>
<style>
    /* Add your CSS styles here */
    body{
        background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('adminimage/sports.jpg');
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"],
    input[type="datetime-local"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Add Sports Event</h2>
    <form action="addsports.php" method="POST">
    <div class="form-group">
            <label for="eventid">EventID</label>
            <input type="text" id="eventid" name="eventid" required>
        </div>
        <div class="form-group">
            <label for="sportName">Sport Name:</label>
            <input type="text" id="sportName" name="sportName" required>
        </div>
        <div class="form-group">
            <label for="sportDateTime">Date and Time:</label>
            <input type="datetime-local" id="sportDateTime" name="sportDateTime" required>
        </div>
        <div class="form-group">
            <label for="sportVenue">Sport Venue:</label>
            <input type="text" id="sportVenue" name="sportVenue" required>
        </div>
        <div class="form-group">
            <label for="sportDescription">Sports Description:</label>
            <textarea id="sportDescription" name="sportDescription" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="eventParticipants">Participants:</label>
            <input type="text" id="eventParticipants" name="eventParticipants" required>
        </div>
        
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
