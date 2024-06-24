<?php

require_once '../partial/controllers.php';
require_once '../config/errorConfig.php';

echo "<body>";

    require_once '../partial/header.php';
    require_once '../partial/sidebar.php';
    

    

    echo "<main";

        foreach ($articles as $article) {

            if ($article ['isPublished']) {

                echo "<article>";

                    echo "<h2>" . $article["title"] . "<h2>";

                    echo "<img src=" .$article["img"]. " />";

                    if (isStringTooLong($article["content"], 20)) {

                        echo "<p>" . shortenString($article["content"], 20) . "...</p>";
                    } else {
                        echo "<p>" . $article["content"] . "<p/>";
                    }
                echo "</article>";

            } else {
                echo "<h2>" . $article['title'] . ": n'est pas publié</h2>";
            }
        }
    echo "</main>";
    

    require_once '../partial/footer.php';

echo "</body>";

?>