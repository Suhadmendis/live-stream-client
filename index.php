<?php
include './CheckCookie.php';
$cookie_name = "user";
if (isset($_COOKIE[$cookie_name])) {

    $mo = chk_cookie($_COOKIE[$cookie_name]);

    if ($mo == "ok") {
        header('Location: ' . "home.php");
        exit();
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees Advertising</title>
    <meta name="theme-color" content="#3d3d3d" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="_css/index_style.css">

</head>
<body>
 
    <br>

    <div id="video-section">
        <div class="container-fluid">
            <div class="row">
                <!-- <h1 id="company-name">Tallees Advertising</h1> -->
                <div class="col-md-2">
                    <div class="side-box">
                        <div class="branding-logo-area" id="branding_1_1">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                        <div class="branding-logo-area" id="branding_1_2">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                        <div class="branding-logo-area" id="branding_1_3">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                        <div class="branding-logo-area" id="branding_1_4">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="video-box">
                        <iframe src="https://tallees-live-stream-sdk.herokuapp.com/" id="video-iframe" title="Web"></iframe>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="side-box">
                        <div class="branding-logo-area" id="branding_2_1">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                        <div class="branding-logo-area" id="branding_2_2">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                        <div class="branding-logo-area" id="branding_2_3">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                        <div class="branding-logo-area" id="branding_2_4">
                            <img class="branding-logo-images" src="_img/branding/right bar/garena-logo-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="stage-platform">
                <!-- <div class="col-md-2">
                    <img class="staircase-images" src="_img/staircase/staircase.png" alt="">
                </div> -->
                <div class="col-md-12">
                    <img class="stage-images" src="_img/staircase/tallees002/3D Render image Bottom Image.png" alt="">
                </div>
                <!-- <div class="col-md-2">
                    <img class="staircase-images" src="_img/staircase/staircase.png" alt="">
                </div> -->
            </div>


        </div>
    </div>






 






    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>