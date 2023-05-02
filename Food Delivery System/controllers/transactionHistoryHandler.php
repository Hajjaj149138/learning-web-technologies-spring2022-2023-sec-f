<?php

require_once '../models/transactionHistoryModel.php';

$transactions = getTransactions();

require_once '../views/history/transactionHistoryView.php';

?>


<link rel="stylesheet" href="../views/history/transactionHistory.css">

