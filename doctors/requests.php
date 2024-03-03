<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Request Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="alert('This is the requests page doctors who have created their account are obligated to fill this form to check whether you\'re a real doctor or not the admins will check this form you can see the status after you fill this form.');">

<div class="container">
    <h2>Doctor Information Form</h2>
    <form method="POST" action="requests.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" name="fullname" class="form-control" id="fullName" placeholder="Enter full name" required>
        </div>
        <div class="form-group">
            <label for="workEmail">Work Email:</label>
            <input type="email" name="workemail" class="form-control" id="workEmail" placeholder="Enter work email" required>
        </div>
        <div class="form-group">
            <label for="startDate">Date of Started Working as a Doctor:</label>
            <input type="date" name="workdate" class="form-control" id="startDate" required>
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
            <label for="experience">Experience:</label>
            <input type="text" name="experience" class="form-control" id="experience" required>
        </div>
        <div class="form-group">
            <label for="education">Education:</label>
            <textarea name="education" class="form-control" id="education" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="description">A Little Description:</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input name="profile" type="file" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <label for="certificate">Doctor License:</label>
            <input name="certificate" type="file" class="form-control-file" id="certificate">
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input name="phonenumber" type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Age: </label>
            <input name="age" type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
        </div>
        <button type="submit" name="post" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>

<?php 
include_once '../php/config.php';
if (isset($_COOKIE['did'])) {
    $did = $_COOKIE['did'];
}

if (isset($_POST['post'])) {
    $fullname = $_POST['fullname'];
    $workemail = $_POST['workemail'];
    $formattedDob = date('Y-m-d', strtotime($_POST['dob'])); // needs to be converted
    $workdate = date('Y-m-d', strtotime($_POST['workdate'])); // needs to be convereted
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $education = $_POST['education'];
    $description = $_POST['description'];
    $phonenumber = $_POST['phonenumber'];
    $age = $_POST['age'];

    if (isset($_FILES['profile'])) {
        $filename = $_FILES["profile"]["name"];
        $tempname = $_FILES["profile"]["tmp_name"];
        $folder = "profile/" . $filename;
    }

    if (isset($_FILES['certificate'])) {
        $certificate = $_FILES["certificate"]["name"];
        $license = $_FILES["certificate"]["tmp_name"];
        $fol = "certificate/" . $certificate;
    }

    $status = 'unverified';
    $sql = "INSERT INTO doctor_details (did, fullname, workemail, workingdate, dob, address, experience, education, description, profile, license, phonenumber, status, age) VALUES (?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "something went wrong " . $conn->error;
    } else {
        $stmt->bind_param("issssssssssss", $did, $fullname, $workemail, $workdate, $formattedDob, $address, $experience, $education, $description, $filename, $certificate, $phonenumber, $status, $age);
        if ($stmt->execute() && move_uploaded_file($tempname, $folder) && move_uploaded_file($license, $fol) === TRUE) {
            echo '<script>alert("successfully uploaded the data"); window.location.href="home.php"</script>';
            exit;
        } else {
            echo "something went wrong " . $conn->error;
            exit;
        }
    }
    $conn->close();
    $stmt->close();
}
?>
