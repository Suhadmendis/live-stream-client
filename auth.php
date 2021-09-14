<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tallees - Live Stream</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/login_style.css">
    <script src="js/user.js"></script>

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <div id="login-form-box">
                    <h2 id="login-head">
                        Dawning of a 
                    </h2>
                    <p id="login-des">
                        New Era Of Novel Therapy
                    </p>
                    <input type="text" id="txtUserName" class="login-input" placeholder="User Name">
                    <input type="password" id="txtPassword" class="login-input" placeholder="Password">

                    <button id="login-button">
                        Login
                    </button>
                </div>
            </div>

        </div>

        <br><br>

        <div class="row">

            <div class="col-md-4">
                <div class="display-box">
                    <p class="display-head">SAFETY PROFILE OF SGLT2 INHIBITORS</p>
                    <div class="display-image-area">
                        <img src="_img/login/maxresdefault.jpeg" alt="" class="display-image">
                    </div>
                    <div class="display-info">
                        <p class="display-name">Dr. Chaminda Garusinghe</p>
                        <p class="display-des">
                            President of Sri Lanka College of Endocrinologists <br>
                            MBBS, MD (UOP), MRCP (UK) <br>
                            MRCP Diabetes & Endocrinology (UK) <br> 
                            Consultant Endocrinologist <br>
                            Colombo South Teaching Hospital <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="display-box">
                    <p class="display-head">SAFETY PROFILE OF SGLT2 INHIBITORS</p>
                    <div class="display-image-area">
                        <img src="_img/login/maxresdefault.jpeg" alt="" class="display-image">
                    </div>
                    <div class="display-info">
                        <p class="display-name">Dr. Chaminda Garusinghe</p>
                        <p class="display-des">
                            President of Sri Lanka College of Endocrinologists <br>
                            MBBS, MD (UOP), MRCP (UK) <br>
                            MRCP Diabetes & Endocrinology (UK) <br> 
                            Consultant Endocrinologist <br>
                            Colombo South Teaching Hospital <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="display-box">
                    <p class="display-head">SAFETY PROFILE OF SGLT2 INHIBITORS</p>
                    <div class="display-image-area">
                        <img src="_img/login/maxresdefault.jpeg" alt="" class="display-image">
                    </div>
                    <div class="display-info">
                        <p class="display-name">Dr. Chaminda Garusinghe</p>
                        <p class="display-des">
                            President of Sri Lanka College of Endocrinologists <br>
                            MBBS, MD (UOP), MRCP (UK) <br>
                            MRCP Diabetes & Endocrinology (UK) <br> 
                            Consultant Endocrinologist <br>
                            Colombo South Teaching Hospital <br>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <br>
    <br>

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