<?php

require_once '../models/complainModel.php';
require_once 'complainController.php';

if(isset($_GET['action']))
{
switch ($_GET['action'])
{
case 'create_complain':
include '../views/helpSupport/createComplain.php';
break;
case 'view_complains':
$complains = getComplains();
break;
default:
include '../views/helpSupport/viewPageComplain.php';
break;
}
}
else
{
include '../views/helpSupport/viewPageComplain.php';
}

?>

<link rel="stylesheet" href="../views/helpSupport/viewComplains.css">
<link rel="stylesheet" href="../views/helpSupport/viewPageComplain.css">
<link rel="stylesheet" href="../views/helpSupport/createComplain.css">
