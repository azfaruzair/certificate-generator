<?php
require('dynamic-details.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sizing.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <title>Oyster Certificate</title>
</head>
<body class="background-img">


    <div class="certificate mt-4"> <!-- Certificate Wrapper -->

        <p class="certificate-header font-sora">This Certificate is Powered by Oyester Trainings</p>

        <div id="certificate">
            <img src="assets/images/certificate.svg" alt="">
            <div class="certificate-user-name">
                <h1><?php echo $name;?></h1>
            </div>

            <div class="details-container"> 
                has successfully completed 7-Days Hands-on Webinar on
                <span><?php echo $course_name;?>.</span><br>
                From: <span><?php echo $start_date;?></span> to <span><?php echo $end_date;?></span>
            </div>
        </div>

    </div> <!-- Certificate Wrapper Ends -->

    <div class="right-side-bar"> 

        <div class="content">

            <h2 class="mb-1 ml-2 ">Certificate Recipent:</h2>
            <div class="user-name">
                <img src="assets/images/user-acc.svg" class="p-1">
                <span class="font-size-22 name"><?php echo $name;?></span>
            </div>

            <h2 class="mb-1 ml-2 mt-3">About Course</h2>
            <div class="about-course p-1">
                <img src="assets/images/course-image.svg" >
                <h4 class="font-size-22 course-title p-1 m-1"><?php echo $course_name;?></h4>
                <span class="issue-date font-size-18 p-1">Issue Date: <span class="date"><?php echo $date_issued;?></span></span>
                <br>
                <br>
                <span class="issue-id font-size-18 p-1">Issue Id: <span class="id"><?php echo $issue_id;?></span></span>
            </div>

            <div class="buttons p-3" onclick="doCapture();">
                <button class="btn p-1 m-1">
                    <i class="fad fa-download"></i>
                    Download
                </button>
    
                <button class="btn p-1 m-1">
                    <i class="fad fa-share"></i>
                    Share
                </button>
            </div>
        </div>

    </div>

    </div> <!-- Recipent Wrapper Ends -->

    <footer class="font-sora">
        <span>Copyright &copy; 2020 Oyesters Training All Rights Reserved.</span>
    </footer>

    <script src="assets/js/html2canvas.js"></script>
    <script>
        function doCapture() {
            html2canvas(document.getElementById('certificate')).then(function(canvas) {
                var imageFile = canvas.toDataURL('image/jpeg',0.9);
                function saveScreenshot(canvas) {
                    let fileName = "image"
                    const link = document.createElement('a');
                    link.download = fileName + '.png';
                    console.log(canvas)
                    canvas.toBlob(function(blob) {
                        console.log(blob)
                        link.href = URL.createObjectURL(blob);
                        link.click();
                    });
                };   
                saveScreenshot(canvas);           
            })
        }
    </script>
</body>
</html>