<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            text-align: center;
        }

        .sidebar img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        .sidebar h2 {
            margin-bottom: 15px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: background 0.3s;
        }

        .sidebar ul li:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .sidebar ul li i {
            font-size: 18px;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            width: calc(100% - 260px);
            background: url('../IMG/au-malabon-rizal.jpg') no-repeat center center/cover;
            color: white;
        }

        .dashboard {
            display: none;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat-box {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .stat-box h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .stat-box p {
            font-size: 14px;
            color: #ddd;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .content {
                margin-left: 210px;
                width: calc(100% - 210px);
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Logo">
        <h2>Guidance System</h2>
        <ul>
            <li onclick="showDashboard()"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
            <li><i class="fas fa-user"></i> Profiling</li>
            <li><i class="fas fa-comments"></i> Counseling Services</li>
            <li><i class="fas fa-exclamation-triangle"></i> Report</li>
        </ul>
    </div>

    <div class="content">
        <div class="welcome">
            <h1>Welcome to the Admin Panel</h1>
            <p>Manage reports, scheduling, and feedback efficiently.</p>
        </div>

        <div class="dashboard">
            <h1>Dashboard Statistics</h1>
            <div class="stats">
                <div class="stat-box">
                    <h2>9</h2>
                    <p>Counseling Cases</p>
                </div>
                <div class="stat-box">
                    <h2>91</h2>
                    <p>Students on Record</p>
                </div>
                <div class="stat-box">
                    <h2>13</h2>
                    <p>Number of Visits</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDashboard() {
            document.querySelector('.welcome').style.display = 'none';
            document.querySelector('.dashboard').style.display = 'block';
        }
    </script>

</body>
</html>
