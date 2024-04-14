<?php 
    include_once '../php/config.php';

    if (isset ($_COOKIE['uid'])) {
        $uid = $_COOKIE['uid'];
    }

    $sql = "SELECT * FROM doctor_details";
    $result = $conn->query($sql);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $doctor_id = $_POST['doctor_id'];
        $reason = $_POST['reason'];

        $sql = "INSERT INTO report VALUES ('$doctor_id', '$uid', '$reason', '$name')";
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Reported successfully</div>';
            exit;
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Report a Doctor</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Report a Doctor</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="report.php">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <label for="doctor">Choose Doctor</label>
                                <select class="form-control" id="doctor" name="doctor_id">
                                    <?php 
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['did'] . '">' . $row['fullname'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reason">Select Your Reason</label>
                                <select class="form-control" id="reason" name="reason">
                                    <option value="Doctor Abuse">Doctor Abuse</option>
                                    <option value="Fake Doctor">Fake Credentials</option>
                                    <option value="Other">Other Reason</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">Report</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
