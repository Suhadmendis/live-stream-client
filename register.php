<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees - Live Stream</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/login_style.css">
    <link rel="stylesheet" href="_css/reg_style.css">
    <script src="js/user.js"></script>

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
                <div id="date-box">
                    <img src="_img/login/Registration Screen 1920 x 1080-01 (1).png" alt="" id="date-image">
                </div>
            </div>
            <div class="col-md-3">
                <div id="login-form-box">
                    <div id="login-upper-stripe">
                        <p id="login-upper-stripe-text">
                            Registraion
                        </p>
                    </div>
                    <div id="login-bottom">
                    
                    <p class="input-label">Name</p>
                        <input type="text" id="name" class="login-input">
                        <p class="input-label">Mobile</p>
                        <input type="text" id="mobile" class="login-input">
                        <p class="input-label">E-mail</p>
                        <input type="text" id="email" class="login-input">
                        <p class="input-label">Speciality</p>
                        <input type="text" id="speciality" class="login-input">

                        <button id="info-button" onClick="register()">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="_img/novartis/registration/Registration-Screen-1920-x-1080-Top.png" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div id="login-form-box">
                    <div id="login-upper-stripe">
                        <!-- <p id="login-upper-stripe-text">
                            Registraion
                        </p> -->
                    </div>
                    <div id="login-bottom">
                    
                    <p class="input-label">Name</p>
                        <input type="text" id="name" class="login-input">
                        <p class="input-label">Mobile</p>
                        <input type="text" id="mobile" class="login-input">
                        <p class="input-label">E-mail</p>
                        <input type="text" id="email" class="login-input">
                        <p class="input-label">Speciality</p>
                        <input type="text" id="speciality" class="login-input">

                        <button id="info-button" onClick="register()">
                            Register
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



    <br>
    <br>

<script>
    var elem = document.getElementById("speciality");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            register();
        }
    }


</script>


</body>
</html>