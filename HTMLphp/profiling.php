<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiling | Guidance System</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Logo" class="AU">
        <h2>Guidance System</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active"><a href="profiling.php">Profiling</a></li>
            <li><a href="counseling.php">Counseling Services</a></li>
            <li><a href="reports.php">Reports</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <h2>Profiling</h2>
        </div>
        <div class="table-container">
            <div class="table-header">
                <button class="add-btn">+ Add</button>
                <button class="import-btn">+ Import</button>
                <input type="text" id="search" placeholder="Search...">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Student Number</th>
                        <th>Student Name</th>
                        <th>Course/Year/Section</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ?>php
                        include 'db_connect.php';
                        $query = "SELECT * FROM students";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['student_number'] . "</td>";
                            echo "<td>" . $row['student_name'] . "</td>";
                            echo "<td>" . $row['course_section'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td><button class='view-btn'>View</button></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
