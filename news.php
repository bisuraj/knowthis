<!DOCTYPE html>
<html>
<head>
    <title>News Website</title>
</head>
<body>
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
                echo "<div>";
                echo "<h2>" . $article->title . "</h2>";
                echo "<p>" . $article->description . "</p>";
                echo "<a href='" . $article->url . "' target='_blank'>Read More</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No articles found.</p>";
        }
    ?>
</body>
</html>
