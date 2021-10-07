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
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <script src="js/user.js?v=0000000001"></script>

</head>
<body>
    

<div id="top-image">
        <img src="_img/Auth/top.png" style="width: 100%" alt="">
    </div>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="banner-box-outer">
                    <div class="banner-box-inner">
                        
                        <p class="banner-top-text">WEBINAR</p>

                        <p class="banner-mid-text">RECENT ADVANCEMENTS </p>
                        <p class="banner-mid-text">IN THE MANAGEMENT </p>
                        <p class="banner-mid-text">OF GLAUCOMA</p>

                        <p class="banner-bottom-text">Sunday, 24th October 2021</p>
                        <p class="banner-bottom-text">9.00 am - 10.15 am</p>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="image-box">
                            <img class="dr-image" src="_img/Auth/Doctors-01.png" alt="">
                        </div>
                        <div class="position-label">
                            <p>KEY NOTE SPEAKER</p>
                        </div>

                        <p class="dr-name">A/Prof. Tim Roberts</p>
                        <p class="dr-des-text">Clinical Associate Professor of Ophthalmology.</p>
                        <p class="dr-des-text">The University of Sydney Consultant Ophthalmic Surgeon,</p>
                        <p class="dr-des-text">Royal North Shore Hospital</p>
                        <p class="dr-des-text">Medical Director,</p>
                        <p class="dr-des-text">Vision Eye Institute - Australia.</p>

                    </div>
                    <div class="col-md-3">
                        <div class="image-box">
                            <img class="dr-image" src="_img/Auth/Doctors-02.png" alt="">
                        </div>
                        <div class="position-label">
                            <p class="position-text">SPEAKER - LOCAL FACULTY</p>
                        </div>
                        
                        <p class="dr-name">Dr. Dilruwani Aryasingha</p>
                        <p class="dr-des-text"><i>(MBBS MD.FRCS)</i></p>
                        <p class="dr-des-text">Consultant Ophthalmologist Golden Key Eye and ENT Hospital, Rajagiriya</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">  
                <br><br><br>
                <div class="input-box-outer">
                    <div class="input-box-inner">
                        <p class="input-label">Email</p>
                        <input type="text" id="txtUserName" class="login-input">
                        <!-- <p class="input-label">Mobile</p>
                        <input type="text" id="txtPassword" class="login-input"> -->
<!-- 
                        <button id="info-button" onClick="IsValiedData()">
                            Sign in
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    



<div id="bottom-image-area">
<img id="bottom-image" src="_img/Auth/bottom.png" alt="">
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