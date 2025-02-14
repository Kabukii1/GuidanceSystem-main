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
        <link rel="stylesheet"href="../CSS/HStyle.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js"></script>

        <style>
            .blue-text {
                color: #050A30;
                font-weight: bold;
                font-size: 1.8em; /* Pinalaki ang font size */
            }
            .column-container {
                display: flex;
                justify-content: space-between;
                gap: 20px;
            }
            .column {
                flex: 1;
            }
        </style>
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
                <p>Student No: <?php echo $student_no; ?></p>
                <p>LRN: <?php echo $lrn; ?></p>
            </div>
            <div class="button-container">
                <ul class="button-list">
                    <li><a href="HOME.php"><button>Home</button></a></li>
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
        <div style="border-radius: 10px; display: flex; align-items: center; background: rgb(48, 59, 178); width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <img src="../CSS/LogoAU.png" alt="Logo" style="width: 120px; height: auto; margin-right: 15px;">
            <h2 style="color: white; margin: 0; font-size: 3.5em; font-family: 'Times New Roman', serif; font-weight: bold; letter-spacing: 1px;">Guidance Office of AU JRC</h2>
        </div>
            <section id="school-info" class="Sif">
            <h2>School Information</h2>
            <p>The late Florentino Cayco, Sr., first Filipino Undersecretary of Public Instruction and illustrious educator, conceptualized the birth and administered the growth of Arellano University.</p>
            <p>This prestigious institution of learning opened in 1938 as the Arellano Law College, named after Cayetano Arellano, first Filipino chief justice. It closed in December 1941 until March 1945 under the Japanese occupation of the Philippines during World War II. At the end of the war, this educational institution reopened in April, 1945 and was renamed as Arellano Colleges offering a two-year preparatory law course and the regular four-year law course, as well as a complete secondary education curriculum.</p>
            <p>Its incessant expansion in all areas and locations has evolved into a network of campuses, the better to serve Metro Manila by going closer to the people.</p>
            <p>At present, the Arellano University System boasts of seven campuses, as follows:</p>
            <ul>
                <li>Juan Sumulong Campus in Legarda, Manila (Main Campus)</li>
                <li>Jose Abad Santos Campus in Pasay City</li>
                <li>Apolinario Mabini Campus in Pasay City (School of Law)</li>
                <li>Andres Bonifacio Campus in Pasig City</li>
                <li>Plaridel Campus in Mandaluyong City</li>
                <li>Elisa Esguerra Campus in Malabon City</li>
                <li>Jose Rizal Campus in Malabon City</li>
            </ul>
            <p>For God and Country. The Arellano University Jose Rizal Campus aims to provide quality education and services that will help maintain the discipline among students. In coordination with the Office of Student Affairs and Prefect of Discipline, the Guidance office continues to extend their services and programs that will fulfill the institution's valuable mission and vision.</p>
        </section>

        <img src="../Pics/map.png" style="width: 80%; max-width: 900px; height: auto; display: block; margin: 0 auto;">

            <div class="column-container">
                <div class="column">
                    <h2 class="blue-text">Vision</h2>
                    <p>To be a center that promotes the overall growth and development of the students.</p>
                </div>
                <div class="column">
                    <h2 class="blue-text">Mission</h2>
                    <p>To provide well-rounded guidance and counseling services to help students become physically, intellectually, emotionally, socially, and spiritually sound individuals.</p>
                </div>
            </div>

            <h2 class=>Primary Objectives of the Guidance System</h2>
            <ul>
                <li>To render seamless communication and information exchange between students and guidance personnel.</li>
                <li>To ensure continuous improvement of the university by empowering and widening the students' support system.</li>
                <li>To enhance the accessibility of the Guidance office, making students receive help even in remote settings and challenging times.</li>
                <li>To implement a new innovation that is responsive and relevant to the changes of society.</li>
                <li>To allow students to confidentially report incidents and concerns in a specific and organized manner, avoiding redundant information.</li>
            </ul>

            <p><strong>For God and Country.</strong> The Arellano University Jose Rizal Campus aims to provide quality education and services that will help maintain the discipline among students. In coordination with the Office of Student Affairs and Prefect of Discipline, the Guidance office continues to extend their services and programs that will fulfill the institution's valuable mission and vision.</p>
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
