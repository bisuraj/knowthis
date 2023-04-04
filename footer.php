<header>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />



    <style>
        body {
            margin-top: 20px;
        }

        .footer .footer-socila-icon a {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #F84E77;
            color: #ffffff;
            border-radius: 50%;
            margin-right: 8px;
            font-size: 15px;
        }

        .footer .footer-socila-icon a:hover {
            background: #1baaa0;
        }

        .footer .footer-links {
            margin: 0;
        }

        .footer .footer-links li+li {
            padding-top: 10px;
        }

        .footer .footer-links li a {
            position: relative;
        }

        .footer .footer-links li a:after {
            content: "";
            position: absolute;
            width: 0px;
            left: auto;
            right: 0;
            bottom: 0;
            height: 1px;
            transition: ease all 0.35s;
            background: #F84E77;
        }

        .footer .footer-links li a:hover:after {
            width: 100%;
            left: 0;
            right: auto;
        }

        .footer .footer-top {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .footer .footer-top h5,
        .footer .footer-top .h5 {
            position: relative;
            font-size: 1.2rem;
            text-transform: uppercase;
        }

        @media (min-width: 768px) {
            .footer .footer-top {
                padding-top: 2rem;
                padding-bottom: 1rem;
            }
        }

        @media (min-width: 992px) {
            .footer .footer-top {
                padding-top: 3rem;
                padding-bottom: 2rem;
            }
        }

        .footer .footer-border-top {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer .footer-border-top.dark {
            border-top: 1px solid rgba(16, 16, 16, 0.1);
        }

        .footer .footer-border-bottom {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer .footer-border-bottom.dark {
            border-bottom: 1px solid rgba(16, 16, 16, 0.1);
        }

        .bg-dark-gradient {
            background: linear-gradient(180deg, #101010 50%, black 100%) repeat-x !important;
        }

        .white-link a {
            color: rgba(255, 255, 255, 0.65);
        }

        a {
            text-decoration: none
        }

        .avatar-lg img {
            width: 90px;
            height: 90px;
        }
    </style>

</header>

<footer class="bg-dark-gradient footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 my-4">
                    <div class="mb-4">
                        <img src="static/img/logo-light.svg" title="" alt="">
                    </div>
                    <div id="google_translate_element"></div>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit() {
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en',
                                                autoDisplay: 'true',
                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                                gaTrack: true,
                                                gaId: 'UA-123456-7',
                                                buttonImage: '//raw.githubusercontent.com/google/material-design-icons/master/action/svg/production/ic_language_48px.svg'
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                    <script
                                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <div class="text-white-65 mb-4">Know this Platform</div>
                    <div class="nav footer-socila-icon">
                        <a href="https://linktr.ee/ujjwal22">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://linktr.ee/ujjwal22">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://linktr.ee/ujjwal22">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://linktr.ee/ujjwal22">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-4">
                    <h5 class="text-white h6 mb-4">Get started</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2 my-4">
                    <h5 class="text-white h6 mb-4">About us</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2 my-4">
                    <h5 class="text-white h6 mb-4">Support</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 my-4">
                    <h5 class="text-white h6 mb-4">Contributors</h5>
                    <div class="white-link">
                        <div class="d-flex pb-3">
                            <div class="avatar avatar-lg rounded">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                            </div>
                            <div class="col ps-3">
                                <small class="text-white-65">20BCE2923</small>
                                <h6 class="font-w-500 h6 m-0"><a class="text-white" href="#">Bisuraj Sharma</a></h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="avatar avatar-lg rounded">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" title="" alt="">
                            </div>
                            <div class="col ps-3">
                                <small class="text-white-65">20BCE0415</small>
                                <h6 class="font-w-500 h6 m-0"><a class="text-white" href="#">Ujjwal Tiwari</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script> $('document').ready(function () {
            $('#google_translate_element').on("click", function () {
                // Change font family and color
                $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
                    .css({
                        'color': '#544F4B',
                        'font-family': 'Roboto',
                        'width': '100%'
                    });
                $("iframe").contents().find('.goog-te-menu2-item-selected').css('display', 'none');
                $("iframe").contents().find('.goog-te-menu2').css('padding', '0px');
                $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');
                $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
                $("iframe").contents().find('td').css('width', '100%');
                $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
                    $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
                }, function () {
                    $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
                });
                $("iframe").contents().find('.goog-te-menu2').css('border', 'none');
                $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
                $(".goog-te-menu-frame").css({
                    'height': '100%',
                    'width': '100%',
                    'top': '0px'
                });
                // Change iframes's size
                $("iframe").contents().find('.goog-te-menu2').css({
                    'height': '100%',
                    'width': '100%'
                });
            });
        });


            </script>