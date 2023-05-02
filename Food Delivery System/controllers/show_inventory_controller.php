<?php
require_once('../models/inventory_model.php');

$inventory = getInventory();

require_once('../views/ReportGenerate/show_inventory.php');
?>


<link rel="stylesheet" href="../views/ReportGenerate/show_inventory.css">
