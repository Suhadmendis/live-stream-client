<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees - Live Stream</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="_css/login_style.css?v=0000000001">
    <script src="js/user.js?v=0000000001"></script>

</head>
<body>
    
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="heading-box">
                    <h1 class="header-text text-hightlight">Webinar</h1>
                    <h1 class="header-text">Optimizing<br> Diabetes care in<br> COVID 19 <br> pandemic</h1>
                </div>
                <div id="image-box">
                    <img src="_img/login/Untitled-1.png" alt="" id="image-dr">
                </div>
            </div>
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3">
                <div id="login-form-box">
                    <div id="login-upper-stripe"></div>
                    <div id="login-bottom">
                    
                        <p class="input-label">Name</p>
                        <input type="text" id="txtUserName" class="login-input">
                        <p class="input-label">Mobile</p>
                        <input type="text" id="txtPassword" class="login-input">

                        <button id="info-button" onClick="IsValiedData()">
                            Sign in
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <img id="top-image" src="_img/novartis/registration/Registration-Screen-1920-x-1080-Top.png" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="live-pallet">
                    <p id="live-text">LIVE WEBINAR</p>
                </div>
                <p id="topic">
                    ROLE OF IL-17 IN PSORIASIS & THERAPEUTIC POTENTIAL OF SECUKINUMAB
                </p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <p id="date">
                    Sunday, 3rd October 2021

                    07.00 pm - 08.00 pm
                </p>


            
                <img src="_img/novartis/registration/Registration-Screen-1920-x-1080-Dr.png" alt="">

                <p id="person-name">Dr Laura Savage</p>
                <p id="person-position">MBChB, BSc (Hons), MRCP (UK), MRCP (Dermatology), PhD</p>
                <p id="person-des">Consultant Dermatologist, Leeds Centre for Dermatology,  <br>

                    Chapel Allerton Hospital and Honorary Senior Lecturer, <br>

                    University of Leeds, UK</p>     



            </div>
            <div class="col-md-4">
                <div id="login-form-box">
                    <div id="login-upper-stripe"></div>
                    <div id="login-bottom">
                    
                        <p class="input-label">Name</p>
                        <input type="text" id="txtUserName" class="login-input">
                        <p class="input-label">Mobile</p>
                        <input type="text" id="txtPassword" class="login-input">

                        <button id="info-button" onClick="IsValiedData()">
                            Sign in
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <br>
    <br>



<div id="bottom-image-area">
<img id="bottom-image" src="_img/novartis/registration/Registration-Screen-1920-x-1080-Baurs-Address.png" alt="">
</div>


<script>
    var elem = document.getElementById("txtPassword");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            IsValiedData();
        }
    }


</script>


</body>
</html>