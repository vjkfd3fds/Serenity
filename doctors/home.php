
<?php 
  include_once '../php/config.php';

  if (isset($_COOKIE['did'])) {
    $did = $_COOKIE['did'];
  } else {
    echo 'No cookie';
  }

  $sql = "SELECT * FROM doctor_details WHERE did = '$did'";
  $result = $conn->query($sql);
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
          <a class="nav-link active" href="#">Subscribed Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Schedules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Status</a>
        </li>
      </ul>
    </div>

    <!-- Main content -->
    <div class="col-md-9 content">
      <!-- Subscribed Users -->
      <div id="subscribed-users">
        <h2>Subscribed Users</h2>
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Subscribed User</h5>
              <p class="card-text"><?php echo $row['workemail']; ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <!-- Profile -->
      <div id="profile" style="display: none;">
        <h2>Profile</h2>
        <!-- Display profile information here -->
      </div>

      <div id="status" style="display: none;">
        <h2>Status</h2>
        <!-- Display profile information here -->
        <?php echo $row['status']; ?>
      </div>
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
