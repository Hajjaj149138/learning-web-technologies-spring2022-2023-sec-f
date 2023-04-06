<?php


require_once('../models/productsModel.php');

if (deleteProduct($_GET['id'])) {
    header('location: productList.php');
}