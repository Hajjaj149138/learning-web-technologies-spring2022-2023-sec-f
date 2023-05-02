<?php
if (!isset($reports)) {
    header("Location: ../../controllers/show_reports_controller.php");
    exit;
}
?>

<html>
<head>
    <title>Financial Reports</title>
    <link rel="stylesheet" href="show_reports.css">
</head>
<body>
    <h1>Financial Reports</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Month</th>
                <th>Expenses</th>
                <th>Profits/Losses</th>
                <th>Monthly Gross Margin (in %)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report): ?>
            <tr>
                <td><?php echo htmlspecialchars($report['month']); ?></td>
                <td><?php echo htmlspecialchars($report['expenses']); ?></td>
                <td><?php echo htmlspecialchars($report['profits_losses']); ?></td>
                <td><?php echo htmlspecialchars($report['gross_margin']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="../views/ReportGenerate/add_report.html">Add another report</a>
    | <a href="../views/admindashboard.php">Dashboard</a>
    | <a href="../views/vendorashboard.php">Dashboard</a>
</body>
</html>
