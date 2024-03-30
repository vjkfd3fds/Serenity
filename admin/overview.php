<?php include_once "../php/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCl | Overview</title>
    <link rel="icon" href="../images/note.png">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">User Accounts</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>User Id</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $conn->prepare("SELECT * FROM users");
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>

    <?php
    $stmt = $conn->prepare("SELECT * FROM doctor_details");
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <div class="container mt-5">
        <h1 class="mb-4">College Accounts</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Doctor Id</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Profile Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["did"] . "</td>";
                        echo "<td>" . $row['workemail'] . "</td>";
                        echo "<td>" . $row['fullname'] . "</td>";
                        echo '<td><img width="100" height="100" src="../doctors/profile/' . $row['profile'] . '" alt=""></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>
