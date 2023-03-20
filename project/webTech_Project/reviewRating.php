<html>
    <head>
        <title>Review & Rating</title>
    </head>

    <body>
        <fieldset>
            <legend><b>Review & Ratings</b></legend>

                <form method="POST">
                    <label for="restaurant">Restaurant Name:</label>
                    <input type="text" name="restaurant"><br><br>

                    <label for="itemName">Item Name:</label>
                    <input type="text" name="itemName"><br><br>
                    
                    <label for="rating">Rating:</label>
                    <select name="rating">
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                    </select><br><br>
                    
                    <label for="review">Review:</label>
                    <textarea name="review"></textarea><br><br>
                    
                    <button type="submit" name="submit">Submit Review</button>
                </form>

                <?php
                    
                    if (isset($_POST['submit'])) {
                    $restaurant = isset($_POST['restaurant']) ? $_POST['restaurant'] : "";
                    $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : "";
                    $rating = isset($_POST['rating']) ? $_POST['rating'] : "";
                    $review = isset($_POST['review']) ? $_POST['review'] : "";
                    
                    $file = fopen("review.txt", "a");
                    
                    fwrite($file, "Restaurant: " . $restaurant . "\n");
                    fwrite($file, "Item Name: " . $itemName . "\n");
                    fwrite($file, "Rating: " . $rating . "\n");
                    fwrite($file, "Review: " . $review . "\n\n");

                    fclose($file);
                    
                    echo "Thank you for your review!";
                    }
                ?>
        </fieldset>
    </body>
</html>