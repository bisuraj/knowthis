<!DOCTYPE html>
<html>

<head>
    <title>News Website</title>

    <style>
        /* .card{
            overflow: hidden;
            transition: transform 3s ease-in;
        }

        .card:hover .card-body {
            transform: scale(1.05);
        } */

    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }
    ?>

    <div class="d-flex align-items-center justify-content-center flex-wrap m-2 p-2 mt-5 pt-5 gap-4">

        <!-- <div class="d-fle"> -->

            <?php
            // Define your News API key
            $apiKey = "e0f2b3353cbf4fe3b880f8bf8aec1f5c";

            // Set the News API endpoint and parameters
            $url = "https://newsapi.org/v2/top-headlines";
            $params = array(
                "country" => "in",
                "pageSize" => 5,
                "apiKey" => $apiKey
            );

            $queryString = http_build_query($params);
            $requestUrl = $url . "?" . $queryString;
            // Send the HTTP request to the News API
            $response = file_get_contents($requestUrl);
            // Convert the JSON response to a PHP object
            $data = json_decode($response);

            // Check if there are any articles
            if (isset($data->totalResults) && $data->totalResults > 0) {
                // Loop through each article and display the title and description

                foreach ($data->articles as $article) {
                    echo "<div class='card gap-4 hoverable' style='width: 25vw;'>";
                    echo "<img src='" . $article->urlToImage . "' class='card-img-top' alt='" . $article->title . "'>";

                    echo "<div class='d-flex align-items-between flex-column card-body'>";
                    echo "<h4 class='card-title text-wrap fw-bold'>" . $article->title . "</h4>";
                    echo "<p class='card-text text-truncate'>" . $article->description . "</p>";
                    echo "<a href='" . $article->url . "' class='btn btn-primary align-self-end ' target='_blank'>Read More</a>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No articles found.</p>";
            }

            ?>
        <!-- </div> -->

    </div>


    <?php
    include 'homepage.php';
    include 'footer.php';
    ?>
</body>

</html>