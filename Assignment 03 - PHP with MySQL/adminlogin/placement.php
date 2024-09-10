<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Placement and Training Event</title>
<style>
    /* Add your CSS styles here */
    body{
        background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('adminimage/placement.jpg');
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
    <h2>Add placement and Training Event</h2>
    <form action="addplacement.php" method="POST">
    <div class="form-group">
            <label for="eventid">EventID</label>
            <input type="text" id="eventid" name="eventid" required>
        </div>
        <div class="form-group">
            <label for="eventName">Event Name:</label>
            <input type="text" id="eventName" name="eventName" required>
        </div>
        <div class="form-group">
            <label for="eventDateTime">Date and Time:</label>
            <input type="datetime-local" id="eventDateTime" name="eventDateTime" required>
        </div>
        <div class="form-group">
            <label for="eventVenue">Venue:</label>
            <input type="text" id="eventVenue" name="eventVenue" required>
        </div>
        <div class="form-group">
            <label for="companyName">Placement Training company name:</label>
            <textarea id="companyName" name="companyName" required></textarea>
        </div>
        <div class="form-group">
            <label for="officerName">Placement Training Officer Name:</label>
            <textarea id="officerName" name="officerName" required></textarea>
        </div>
        <div class="form-group">
            <label for="eventDescription">Description:</label>
            <textarea id="eventDescription" name="eventDescription" rows="4" required></textarea>
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
