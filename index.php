<?php
include './CheckCookie.php';
$cookie_name = "tallleesnovartis";
if (isset($_COOKIE[$cookie_name])) {

    // $mo = chk_cookie($_COOKIE[$cookie_name]);

    // if ($mo == "ok") {
        
    // }
}else{
    header('Location: ' . "auth.php");
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees Advertising</title>
    <meta name="theme-color" content="#953484" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="_css/index_style.css?v=0000000003">
    <script src="js/user.js?v=0000000003"></script>

</head>
<body>
 
    <br>

    <div id="video-section">
        <div class="container-fluid">
            <div class="row">
                <!-- <h1 id="company-name">Tallees Advertising</h1> -->
                <div class="col-md-2">
                    <div class="side-box">
                        <!-- <img src="_img/staircase/tallees003/Sanofi 3D Render image Pillar2.png?v=0000000003" class="side-box-image" alt=""> -->
                        <div class="branding-logo-area" id="branding_1_1">
                            <img class="branding-logo-images" src="_img/platform/left.png?v=0000000003" alt="">
                        </div>
                        <!-- <div class="branding-logo-area" id="branding_1_2">
                            <img class="branding-logo-images" src="_img/novartis/platform/Side Pillars-01-center.jpg?v=0000000003" alt="">
                        </div> -->
                        <!-- <div class="branding-logo-area" id="branding_1_3"> -->
                            <!-- <img class="branding-logo-images" src="_img/staircase/tallees004/pilwave.png?v=0000000003" alt=""> -->
                        <!-- </div>
                        <div class="branding-logo-area" id="branding_1_4">
                            <img class="branding-logo-images-bottom" src="_img/novartis/platform/Side Pillars-01-bottom.jpg?v=0000000003" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="video-box">
                        <iframe src="https://tallees-live-stream-sdk.herokuapp.com/" id="video-iframe" title="Web"></iframe>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="side-box">
                        <!-- <img src="_img/staircase/tallees003/Sanofi 3D Render image Pillar1.png?v=0000000003" class="side-box-image" alt=""> -->
                        <div class="branding-logo-area" id="branding_2_1">
                            <img class="branding-logo-images" src="_img/platform/right.png?v=0000000003" alt="">
                        </div>
                        <!-- <div class="branding-logo-area" id="branding_2_2"> -->
                        <!-- <img class="branding-logo-images" src="_img/novartis/platform/Side Pillars-02-center.jpg?v=0000000003" alt=""> -->
                        <!-- </div> -->
                        <!-- <div class="branding-logo-area" id="branding_2_3"> -->
                            <!-- <img class="branding-logo-images" src="_img/staircase/tallees004/pilwave.png?v=0000000003" alt=""> -->
                        <!-- </div> -->
                        <!-- <div class="branding-logo-area" id="branding_2_4"> -->
                            <!-- <img class="branding-logo-images" src="_img/staircase/tallees004/logo002.png?v=0000000003" alt=""> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>

            <div class="row" id="stage-platform">
                <!-- <div class="col-md-2">
                    <img class="staircase-images" src="_img/staircase/staircase.png?v=0000000003" alt="">
                </div> -->
                <div class="col-md-12">
                    <img class="stage-images" src="_img/platform/bottom.png?v=0000000003" alt="">
                </div>
                <!-- <div class="col-md-2">
                    <img class="staircase-images" src="_img/staircase/staircase.png?v=0000000003" alt="">
                </div> -->
            </div>


        </div>
    </div>






 






    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>