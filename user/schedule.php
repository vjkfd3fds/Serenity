<?php 
	include_once '../php/config.php';


	$sql = "SELECT * FROM doctor_details WHERE status = 'verified'";
	$var = $conn->query($sql);
	$row = $var->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Profile
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="started_working">Started Working Date</label>
                <input type="date" class="form-control" id="started_working">
              </div>
              <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" class="form-control" id="experience" placeholder="Enter your experience">
              </div>
              <div class="form-group">
                <label for="education">Education</label>
                <input type="text" class="form-control" id="education" placeholder="Enter your education">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Enter a brief description"></textarea>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
              </div>
            </form>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
