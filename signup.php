<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets\style.css">
<style>
    .profile-badge{
    border:1px solid #c1c1c1;
    padding:5px;
    position: relative;
}

.user-detail{
    background-color: #fff;
    position: relative;
    padding:115px 0px 10px 0px;
    color:#8B8B89;
}
.user-detail h3{
    margin: 0px;
    margin:0px 0px 5px 0px;
    color: #000;
}
.user-detail p{
    font-size:14px;
}
.user-detail .btn{
    margin-bottom:10px;
    background-color: #fff;
    border:1px solid #DEDEDE;
    border-radius: 0px;
    color:black;
}
.user-detail .btn i{
    color:#D35B4D;
    padding-right:18px;
}
.profile-pic{
    position: absolute;
    height:60px;
    width:60px;
    left: 50%;
    transform: translateX(-50%);
    top: 0px;
    z-index: 1001;
    padding: 10px;
}
.profile-pic img{
   
    border-radius: 50%;
    box-shadow: 0px 0px 5px 0px #c1c1c1;
    cursor: pointer;
    width: 60px;
    height: 60px;
}   
::file-selector-button {
  display: none;
}

    </style>
</head>
<body>
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                <img alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" id="profile-image1" height="200">
                 <input id="profile-image-upload" class="hidden" type="file" hidden onchange="previewFile()"style="display:none" >
                 <div style="color:#999;" >  </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="confirm-password"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" />
                    </div>
                    <div class="form-group">
                        <label for="gender"><i class="zmdi zmdi-male-female"></i></label>
                        <select name="gender" id="gender">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="area-pincode"><i class="zmdi zmdi-pin"></i></label>
                        <input type="text" name="area-pincode" id="area-pincode" placeholder="Area Pincode" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
            </div>
        </div>
    </div>
</section>
    <script src="js\jquery\jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
         function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
                      $(function() {
            $('#profile-image1').on('click', function() {
                $('#profile-image-upload').click();
            });
        });
        
    </script>
</body>
</html>