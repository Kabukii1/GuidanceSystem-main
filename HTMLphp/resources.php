<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance</title>
    <link rel="stylesheet" href="../CSS/MStyle.css"> 
    <link rel="stylesheet" href="../CSS/BStyle.css"> 
    <link rel="stylesheet" href="../CSS/FStyle.css"> 
    <link rel="stylesheet" href="../CSS/RStyle.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js"></script>
</head>

<body>

    <header>
        <div class="LContainer">
            <a id="logoLink" href="../HTMLphp/Redirect.html" onclick="return false;">
                <img src="../CSS/2.png" alt="Logo" class="Logo">
            </a>
            <div class="LText">
                <h4 class="LsText">Guidance</h4>
                <p class="pLText">AU Jose Rizal Campus</p>
            </div>
            <div>
                <h2 class="CurrentPage">Main</h2>
            </div>
        </div>
    </header>

    <?php include '../Functionphp/display_info.php'; ?>

    <main class="CBody">
        <div class="Info">
            <p>Student No: <?php echo $student_no ?? 'N/A'; ?></p>
            <p>LRN: <?php echo $lrn ?? 'N/A'; ?></p>
        </div>

        <div class="button-container">
            <ul class="button-list">
                <li><a href="HOME.php"><button>HOME</button></a></li>
                <li><a href="news.php"><button>News & Resources</button></a></li>
                <li><a href="resources.php"><button>Student Services</button></a></li>
                <li><a href="Report.php"><button>Report</button></a></li>
                <li><a href="CC.php"><button>Current Cases</button></a></li>
                <li><a href="Feedback.php"><button>Feedback</button></a></li>
            </ul>
        </div>
    </main>

    <div class="Bg">
        <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
    </div>

    <article class="AUart">
        <div class="AUcont">
            <div style="display: flex; align-items: center; background: rgb(48, 59, 178); width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <img src="../CSS/LogoAU.png" alt="Logo" style="width: 120px; height: auto; margin-right: 15px;">
                <h2 style="color: white; margin: 0; font-size: 3.5em; font-family: 'Times New Roman', serif; font-weight: bold; letter-spacing: 1px;">
                    Guidance Office of AU JRC
                </h2>

                
            </div>

            <div class="container">
    <aside class="calendar-section">
        <h3>Event Calendar</h3>
        <iframe src="https://calendar.google.com/calendar/embed?src=your_calendar_id&ctz=Asia/Manila" 
                style="border: 0; width: 100%; height: 200px;" frameborder="0" scrolling="no"></iframe>
    </aside>
    <section class="events-section">
        <div class="event-grid">
            <div class="event-card">
                <img src="../Pics/article.png" alt="Event 1">
                
            </div>
            <div class="event-card">
                <img src="../Pics/aarticle.png" alt="Event 2">
               
            </div>
            <div class="event-card">
                <img src="../Pics/articlee.png" alt="Event 3">
                
            </div>
            <div class="event-card">
                <img src="../Pics/articleee.png" alt="Event 4">
            
            </div>
        </div>
    </section>
</div>

<style>
    .container {
        display: flex;
        gap: 20px;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
    }
    .calendar-section {
        width: 38%;
        padding: 5px;
        background: #003366;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: white;
    }
    .calendar-section h3 {
        text-align: center;
    }
    .events-section {
        width: 60%;
    }
    .event-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    .event-card {
    background: none; /* Alisin ang white background */
    box-shadow: none; /* Alisin ang shadow */
    padding: 0; /* Alisin ang padding */
    border-radius: 0; /* Alisin ang border radius */
    text-align: center;
}

.event-card img {
    width: 100%; /* Gawin full width */
    height: auto;
    border-radius: 0; /* Alisin ang border radius ng image */
    display: block;
}

</style>    
</article>

 

<main class="Footer">
        <div class="FContainer" style="display: flex; flex-direction: column; align-items: center; text-align: center; padding: 1px;">
            <div class="middle-section">
                <a id="logolink" href="https://www.arellano.edu.ph/" class="AUOS">
                    <img src="../CSS/LogoAU.png" alt="Logo" class="AU" 
                         style="width: 100px; height: auto; display: block; margin: 0 auto;">
                </a>
            </div>
            <div class="contact-section" style="font-size: 14px; margin-top: 8px; font-weight: normal; color: #FFFFFF;">
                <p>
                    <i class="fa-solid fa-location-dot" style="font-size: 16px;"></i> Concepcion, Malabon City &nbsp; | &nbsp;
                    <i class="fa-brands fa-facebook" style="font-size: 16px;"></i> 
                    <a href="https://www.facebook.com/aujoserizal" target="_blank" style="color: #FFFFFF; text-decoration: none;">Facebook</a> &nbsp; | &nbsp;
                    <i class="fa-solid fa-phone" style="font-size: 16px;"></i> 8-921-2744 (Principal's Office) &nbsp; | &nbsp;
                    <i class="fa-solid fa-envelope" style="font-size: 16px;"></i> hs.joserizal@arellano.edu.ph
                </p>
            </div>
        </div>
    </main>

    <!-- ✅ Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script src="../Lib/jquery-3.7.1.js"></script> 
    <script src="../Functionphp/Redirect.js"></script>
</body>
</html>