<?php

require_once '../models/reviewModel.php';
require_once 'reviewController.php';

if(isset($_GET['action'])) 
{
  switch ($_GET['action']) 
  {
    case 'create_review':
      include '../views/review/createReview.php';
      break;
    case 'view_reviews':
      $reviews = getReviews();
      //include '../views/review/viewReviews.php';
      break;
    default:
      include '../views/review/viewPageReview.php';
      break;
  }
} 
else 
{
  include '../views/review/viewPageReview.php';
}

?>


<link rel="stylesheet" href="../views/review/createReview.css">

<link rel="stylesheet" href="../views/review/viewReviews.css">