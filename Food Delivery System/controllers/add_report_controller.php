<?php

require_once '../models/financial_report.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $month = $_POST['month'];
    $expenses = $_POST['expenses'];
    $profits_losses = $_POST['profits_losses'];
    
    if (createReport($month, $expenses, $profits_losses)) {
        header("Location: ../views/ReportGenerate/show_reports.php");
    } else {
        echo "Error: Could not add report.";
    }
} else {
    header("Location: ../views/ReportGenerate/add_report.html");
}

?>
