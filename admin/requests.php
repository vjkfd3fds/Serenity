<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Requests</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/requests.css">
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white mb-5">
                    <div class="card-heading clearfix border-bottom mb-4">
                        <h4 class="card-title">Doctor Requests</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <?php 
                                include_once '../php/config.php';

                                $sql = "SELECT * FROM doctor_details";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($row['status'] == 'unverified') {
                                            echo '<li class="position-relative booking">';
                                            echo '<form method="POST" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">';
                                            echo '<div class="media">';
                                            echo '<div class="msg-img">';
                                            echo '<img src="../doctors/profile/'.$row['profile'].'" alt="">';
                                            echo '</div>';
                                            echo '<div class="media-body">';
                                            echo '<h5 class="mb-4">'.$row['fullname'].' <span class="badge badge-primary mx-3">'.$row['status'].'</span></h5>';
                                            echo '<div class="mb-3">';
                                            echo '<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Work Email:</span>';
                                            echo '<span class="bg-light-blue">'.$row['workemail'].'</span>';
                                            echo '</div>';
                                            echo '<div class="mb-3">';
                                            echo '<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Date of Started Working:</span>';
                                            echo '<span class="bg-light-blue">'.$row['workingdate'].'</span>';
                                            echo '<input type="hidden" name="doctor_id" value="'.$row['did'].'">';
                                            echo '</div>';
                                            echo '<div class="mb-3">';
                                            echo '<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Date of Birth:</span>';
                                            echo '<span class="bg-light-blue">'.$row['dob'].'</span>';
                                            echo '</div>';
                                            echo '<div class="mb-3">';
                                            echo '<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Education:</span>';
                                            echo '<span class="bg-light-blue">'.$row['education'].'</span>';
                                            echo '</div>';
                                            echo '<div class="mb-3">';
                                            echo '<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Experience:</span>';
                                            echo '<span class="bg-light-blue">'.$row['experience'].'</span>';
                                            echo '</div>';
                                            echo '<hr>';
                                            echo '<a href="../doctors/certificate/'.$row['license'].'" class="btn-gray">View License</a>';
                                            echo '</div>';
                                            echo '<div class="buttons-to-right">';
                                            echo '<button type="submit" name="reject" class="btn-gray mr-2"><i class="far fa-times-circle mr-2"></i> Reject</button>';
                                            echo '<button type="submit" name="approve" class="btn-gray"><i class="far fa-check-circle mr-2"></i> Approve</button>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</form>';
                                            echo '</li>';
                                        } 
                                    }
                                } else {
                                    echo "No content here";
                                }

                                // Handle form submission
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (isset($_POST['approve'])) {
                                        $did = $_POST['doctor_id'];
                                        $status = 'verified';
                                        $sql = "UPDATE doctor_details SET status = '$status' WHERE did = '$did'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo '<script>alert("Successfully verified the request");</script>';
                                            // Refresh the page after successful update
                                            echo '<meta http-equiv="refresh" content="0">';
                                            exit;
                                        } else {
                                            echo "Something went wrong " . $conn->error;
                                        }
                                    } else if (isset($_POST['reject'])) {
                                        $did = $_POST['doctor_id'];
                                        $status = 'rejected';
                                        $sql = "UPDATE doctor_details SET status = '$status' WHERE did = '$did'";
                                        if ($conn->query($sql) === TRUE) {
                                            echo '<script>alert("Successfully rejected the request");</script>';
                                            // Refresh the page after successful update
                                            echo '<meta http-equiv="refresh" content="0">';
                                            exit;
                                        } else {
                                            echo "Something went wrong " . $conn->error;
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>