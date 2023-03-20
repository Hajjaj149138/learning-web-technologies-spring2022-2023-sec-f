<html>
    <body>
        <fieldset>
            <legend>
                <b>View Review & Ratings</b>
            </legend>
                <?php
                    $file = fopen("review.txt", "r");

                    while (!feof($file)) {
                    $restaurant = fgets($file);
                    if ($restaurant != "") {
                        echo $restaurant. "<br>";
                    }

                    $itemName = fgets($file);
                    if ($itemName != "") {
                        echo $itemName. "<br>";
                    }
                    
                    $rating = fgets($file);
                    if ($rating != "") {
                        echo $rating . "<br>";
                    }
                    
                    $review = fgets($file);
                    if ($review != "") {
                        echo $review . "<br><br>";
                    }
                    }
                    fclose($file);
                    ?>
        </fieldset>
    </body>
</html>