<?php 
session_start();
include_once '../php/config.php';

// Check if the doctor's ID is set in the session
if (isset($_SESSION['lmao'])) {
    // Retrieve the doctor's ID
    $selected_did = $_SESSION['lmao'];
} else {
    // If the doctor's ID is not set in the session, handle the case accordingly
    echo "No doctor's ID found in session";
}

if (isset($_COOKIE['uid'])) {
    $uid = $_COOKIE['uid'];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve appointment details from the form
    $fullname = $_POST['fullname'];
    $workemail = $_POST['workemail'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $phonenumber = $_POST['phonenumber'];
    $age = $_POST['age'];
    $appointmentDate = $_POST['appointmentDate'];
    
    // Convert appointment time to 12-hour format
    $appointmentTime = date("h:i A", strtotime($_POST['appointmentTime']));

    // Validate appointment date and time
    if (empty($appointmentDate) || empty($appointmentTime)) {
        echo '<script>alert("Please select appointment date and time.");</script>';
    } else {
        // Combine date and time into appointment datetime
        $appointmentDateTime = date("Y-m-d H:i:s", strtotime("$appointmentDate $appointmentTime"));

        // Check if the appointment time already exists in the database
        $sql1 = "SELECT appointment_time FROM appointment_details WHERE appointment_time = ?";
        $stmt = $conn->prepare($sql1);
        $stmt->bind_param("s", $appointmentDateTime);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo '<script>alert("This time has already been booked by someone. Please choose another one.");</script>';
        } else {
            // Proceed with inserting appointment details if the time is available
            $reason = $_POST['reason'];

            // Insert the appointment details into the database
            $sql = "INSERT INTO appointment_details (did, fullname, workemail, dob, address, description, phonenumber, age, appointment_date, appointment_time, reason, uid) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("isssssssssss", $selected_did, $fullname, $workemail, $dob, $address, $description, $phonenumber, $age, $appointmentDate, $appointmentDateTime, $reason, $uid);
                if ($stmt->execute()) {
                    echo '<script>alert("Appointment booked successfully"); window.location.href="gateway.php"; </script>';
                    exit;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2>Booking Information</h2>
    <form method="POST" action="" onsubmit="return validate();">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" name="fullname" class="form-control" id="fullName" placeholder="Enter full name" required>
        </div>
        <div class="form-group">
            <label for="workEmail">Email:</label>
            <input type="email" name="workemail" class="form-control" id="workEmail" placeholder="Enter you email" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" class="form-control" id="dob" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input name="phonenumber" type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input name="age" type="number" class="form-control" id="age" placeholder="Enter age" required>
        </div>
        <div class="form-group">
            <label for="appointmentDate">Appointment Date:</label>
            <input type="date" name="appointmentDate" class="form-control" id="appointmentDate" required>
        </div>
        <div class="form-group">
            <label for="appointmentTime">Appointment Time:</label>
            <input type="time" name="appointmentTime" class="form-control" id="appointmentTime" required>
        </div>
        <div class="form-group">
            <label for="reason">Reason for Appointment:</label>
            <textarea name="reason" class="form-control" id="reason" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
</div>
<script>
    function validate() {
        let phone_number = document.getElementById('phoneNumber').value;

        if (phone_number.length != 10) {
            alert("Phone number should be 10 digits");
            return false;
        }
        return true;
    }
</script>
</body>
</html>
