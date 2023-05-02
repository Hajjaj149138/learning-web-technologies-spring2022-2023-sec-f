<?php

require_once '../models/financial_report.php';

$reports = getReports();

require_once '../views/ReportGenerate/show_reports.php';

?>
<link rel="stylesheet" href="../views/ReportGenerate/show_reports.css">
