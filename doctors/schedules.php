
<?php 


  include_once "../php/config.php";
    if (isset($_COOKIE['did'])) {
      $did = $_COOKIE['did'];

      $sql = "SELECT * FROM doctor_details WHERE did = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $did);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
      } else {
        echo '<script>alert("You didn\'t fill the form.");</script>';
          echo '<script>window.location.href = "requests.php";</script>';
      }

      if ($row['status'] == 'unverified' || $row['status'] == 'rejected') {
        echo '<script>alert("If you cannot access this page it means either you\'re rejected or not yet verified by the admin.");</script>';
          echo '<script>window.location.href = "index.php";</script>';
      }
    }
  include_once '../php/config.php';

  if (isset($_COOKIE['did'])) {
    $did = $_COOKIE['did'];
  } else {
    echo 'No cookie';
  }

  $sql = "SELECT * FROM doctor_details WHERE did = '$did'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #f8f9fa;
      padding-top: 20px;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 sidebar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">Schedules</a>
        </li>
      </ul>
    </div>

    <!-- Main content -->
    <div class="col-md-9 content">
<?php 
  include_once '../php/config.php';

  if (isset($_COOKIE['did'])) {
    $did = $_COOKIE['did'];
  } else {
    echo 'No cookie';
  }

  $sql = "SELECT * FROM appointment_details WHERE did = '$did'";
  $result = $conn->query($sql);
?>
      <!-- Schedules -->
      <div id="schedules" style="display: none;">
        <h2>Schedules</h2>
        <!-- Display schedules here -->
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Work Email</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Description</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              <?php $result->data_seek(0); // Reset the pointer ?>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo $row['fullname'] ?></td>
                  <td><?php echo $row['workemail']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['phonenumber']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['appointment_date']; ?></td>
                  <td><?php echo $row['appointment_time'] ?></td>
                  <td><?php echo $row['reason']; ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    // Handle sidebar navigation
    $('.nav-link').click(function(e) {
      e.preventDefault();
      var target = $(this).text().toLowerCase().replace(/\s/g, '-');
      $('.content > div').hide();
      $('#' + target).show();
    });
  });
</script>

</body>
</html>
