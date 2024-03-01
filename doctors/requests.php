<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="alert('This is the requests page doctors who have created their account are obligated to fill this form to check whether you\'re a real doctor or not the admins will check this form you can see the status after you fill this form.');">

	<div class="container">
  <h2>Doctor Information Form</h2>
  <form method="POST" action="requests.php">
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
      <textarea name="experience" class="form-control" id="experience" rows="3" required></textarea>
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
      <label for="certificate">Image Certificate:</label>
      <input name="certificate" type="file" class="form-control-file" id="certificate">
    </div>
    <div class="form-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

