<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="css/blogcss.css" rel="stylesheet">


</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }

    ?>

    <main class="d-flex align-items-start justify-content-center mt-5 pt-5">

        <div class="w-50">

            <div class="d-flex align-items-center justify-content-center">
                <div class="tm-post-full">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-color-primary tm-post-title">How technology investments are revolutionising the agriculture sector in India</h2>
                        <p class="tm-mb-40 text-muted h6">April 05 2023 posted by Bisuraj Sharma</p>

                        <p>Technological interventions are taking over the world gradually. We are entering into the fourth industrial revolution or Industry 4.0 with a focus on digitization and automation. With this, farming operations are no longer run with basic technology. Farmers and agriculturalists are too stepping ahead for agritech sophistication. There has been an aggressive investment in agritech approaches involving IoT (Internet of Things), smart logistics, Artificial Intelligence (AI), Kisan drones and Machine Learning (ML). Given these practices, India’s agricultural sector has witnessed massively improved growth in the last two years, with exports touching an all-time high of about $50 billion.</p>
<p>Starting from awareness campaigns run by Non-Governmental Organisations to the Government of India’s aggressive push toward modernising India’s agricultural sector, the results will scale up further. As per a FICCI and PWC joint report, $500 million has already been invested in India’s agritech startups in 2020-2021. The agricultural arena today is one of the largest employers in the country, registering a growth of 3.6% in the pandemic-hit 2020-2021 and further rising to 3.9% in 2021-2022. Here is a look at some of the interventions that are modernising our agricultural infrastructure:</p>
<h3>Drone tech investments to make farming less labour intensive</h3>
<p>Drones are a popular farm tech tool used to spray agrochemicals and nutrition onto crops, This is now taking a major headway forward with the Indian agricultural drones market forecasted to achieve a four- figure rise by the year 2028. The projected CAGR in this domain is 25% during the period of 2022-2028. These unmanned aerial vehicles reduce the dependence on manual labour, enabling the spray of insecticides, pesticides and soil conditioners automatically, that too efficiently at time-specific intervals. This technology also supports monitoring yields through aerial photography, so farmers can inspect their fields without having to walk through the entire field on foot.</p>
<p>Recently, in May 2022, the Government of India inaugurated a programme to provide 50% or Rs. 5 lakh subsidies to SC/ST, small and women farmers for employing Kisan drones in their fields. For all other farmers, this subsidy amount was kept at 40% or up to Rs. 4 lakh. This aims to make agritech farming more affordable, which supports crop assessment, digitization of land records and spraying of vital agrochemicals on farms. Through this, the overall labour-intensive costs shall be reduced and farmers’ income will get an overall boost.</p>
<h3>IoT investments to bring process automation to farming</h3>
<p>The last few years have seen a rise in the concept of smart farming, wherein one of the major transformations has been the usage of the Internet of Things (IoT) devices for farm process automation. Sensors are being deployed on fields to measure the soil topography and assess the agrochemical needs of a particular area. These smart sensors are placed on fields, gather critical growth data and produce detailed analytics for farmers, who can view these readable insights on their smartphones. Even though the current adoption of this technology remains low, it has been projected that IoT-enabled connected agricultural practices are estimated to grow by three times by the year 2025.</p>
<p>Parameters like soil quality, water levels, moisture, plant diseases and temperature can be read by these IoT-enabled sensors to bring out insights for farmers and act out interventions accordingly. Further to this, IoT technology can also be enabled for water management in the fields, wherein water flow can be regulated on the basis of the moisture content in the soil or ambient air.
                        <span class="d-block text-right tm-color-primary">Agriculture</span>
                    </div> <!-- Comments -->
                    <div class="container">
                        <h2 class="text-primary pb-3">Comments</h2>
                        <hr>

                        <form action="" class="comment-form pt-3">
                            <h2 class="text-primary pb-3">Your comment</h2>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class="text-right m-2 mb-4">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <aside class="d-flex w-25">
            <div class="tm-post-sidebar">
                <hr class="mb-3 tm-hr-primary">
                <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
                <ul class="tm-mb-75 pl-5 tm-category-list">
                    <li><a href="blog1.php" class="tm-color-primary">Agriculture</a></li>
                    <li><a href="blog2.php" class="tm-color-primary">Government Schemes</a></li>
                    <li><a href="blog3.php" class="tm-color-primary">Awareness</a></li>
                    <li><a href="blog4.php" class="tm-color-primary">Recent Technology</a></li>
                    <li><a href="#" class="tm-color-primary">Trends</a></li>
                </ul>
                <hr class="mb-3 tm-hr-primary">
                <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                <a href="blog1.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/onion.jpeg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 1
                        </figcaption>
                    </figure>
                </a>
                <a href="blog2.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/gvt.jpg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 2
                        </figcaption>
                    </figure>
                </a>
                <a href="blog3.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/edu.jfif" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 3</figcaption>
                    </figure>
                </a>
            </div>
        </aside>

    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>