<?php
session_start();
session_destroy();
header("Location:../phpPages/getInvolved.php");
