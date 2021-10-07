<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees - Live Stream</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/login_style.css?v=0000000002">
    <!-- <link rel="stylesheet" href="_css/reg_style.css"> -->
    <script src="js/user.js"></script>

</head>
<body>
    
    <br><br><br><br>

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

                        <p>A/Prof. Tim Roberts</p>
                        <p>Clinical Associate Professor of Ophthalmology.</p>
                        <p>The University of Sydney Consultant Ophthalmic Surgeon,</p>
                        <p>Royal North Shore Hospital</p>
                        <p>Medical Director,</p>
                        <p>Vision Eye Institute - Australia.</p>

                    </div>
                    <div class="col-md-3">
                        <div class="image-box">
                            <img class="dr-image" src="_img/Auth/Doctors-02.png" alt="">
                        </div>
                        <div class="position-label">
                            <p class="position-text">SPEAKER - LOCAL FACULTY</p>
                        </div>
                        
                        <p>Dr. Dilruwani Aryasingha</p>
                        <p>(MBBS MD.FRCS)</p>
                        <p>Consultant Ophthalmologist Golden Key Eye and ENT Hospital, Rajagiriya</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">  
                <br><br><br>
                <div class="input-box-outer">
                    <div class="input-box-inner">
                        <p class="input-label">Name</p>
                        <input type="text" id="name" class="login-input">
                        <p class="input-label">Mobile</p>
                        <input type="text" id="mobile" class="login-input">
                        <p class="input-label">E-mail</p>
                        <input type="text" id="email" class="login-input">
                        <p class="input-label">Speciality</p>
                        <input type="text" id="speciality" class="login-input">
                        <p class="input-label">Hospital</p>
                        <input type="text" id="extra_1" class="login-input">

                        <button id="info-button" onClick="register()">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    



<div id="bottom-image-area">
<img id="bottom-image" src="_img/novartis/registration/Registration-Screen-1920-x-1080-Baurs-Address1.png?v=0000000001" alt="">
</div>

<script>
    var elem = document.getElementById("extra_1");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            register();
        }
    }


</script>


</body>
</html>