<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.0.12">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

    <style>
.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #80bdff;
outline: 0;
 box-shadow: none !important;
}


.dashboard-header .navbar {
padding: 0px;
border-bottom: 1px solid #000000;
-webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
-webkit-transition: all 0.3s ease;
min-height: 60px;
}



.navbar-brand {
display: inline-block;
margin-right: 1rem;
line-height: inherit;
white-space: nowrap;
padding: 11px 20px;
font-size: 30px;
text-transform: uppercase;
font-weight: 700;
color: #007bff;
}
.navbar-brand:hover{
color: #007bff;
}
.navbar-right-top {}

.navbar-right-top .nav-item {
border-right: 1px solid #e6e6f2;
}

.navbar-right-top .nav-item:last-child {
border: none;
}

.navbar-right-top .nav-item .nav-link {
padding: 13px 20px;
font-size: 16px;
line-height: 2;
color: #82849f;
}


/* ----- User Nav Dropdown -----*/

.nav-user {}

.nav-user-dropdown {
padding: 0px;
min-width: 230px;
margin: 0px;
}

.nav-user-name {}

.nav-user-info {
background-color: #5969ff;
line-height: 1.4;
padding: 12px;
color: #fff;
font-size: 13px;
border-radius: 2px 2px 0 0;
}

.nav-user-info .status {
float: left;
top: 7px;
left: 0px;
}

.nav-user-dropdown {}

.nav-user-dropdown .dropdown-item {
display: block;
width: 100%;
padding: 12px 22px 15px;
clear: both;
font-weight: 400;
color: #686972;
text-align: inherit;
white-space: nowrap;
background-color: transparent;
border: 0;
font-size: 13px;
line-height: 0.4;
}

.nav-user-dropdown .dropdown-item:hover {
background-color: #f7f7fb;
}

    </style>
</head>
<body>
    <div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="#">KnowThis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">AskMe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Community</a>
            </li> 
            <li class="nav-item">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
            </li>

            <li class="nav-item">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">Sign up</button>
            </li>
        </ul>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your login form here -->
                <form method="POST" class="register-form" id="login-form">
                <div class="card-body p-5 text-black">

<div class="my-md-5">

  <div class="text-center pt-1">
    <i class="fas fa-user-astronaut fa-3x"></i>
    <h1 class="fw-bold my-5 text-uppercase">log in</h1>
  </div>

  <div class="form-outline form-black mb-4">
    <input type="email" id="typeEmail" class="form-control form-control-lg" />
    <label class="form-label" for="typeEmail">Email</label>
  </div>

  <div class="form-outline form-black mb-4">
    <input type="password" id="typePassword" class="form-control form-control-lg" />
    <label class="form-label" for="typePassword">Password</label>
  </div>

  <div class="form-check">
    <input
      class="form-check-input"
      type="checkbox"
      value=""
      id="flexCheckDefault"
    />
    <label class="form-check-label" for="flexCheckDefault">
      Remember me
    </label>
  </div>
</div>

<div class="text-center">
  <p class="mb-0"><a href="#!" class="text-black fw-bold">Forgot password?</a></p>
</div>

</div>
</div>
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="loginBtn">Login</button>
            </div>
        </div>
    </div>
</div>

<!-- Sign up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your sign up form here -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="signupBtn">Sign up</button>
             </div>
</div>
</div>
</div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

</body>
</html>