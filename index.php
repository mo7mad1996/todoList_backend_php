<?php
include('./config/connect.php');
include('./config/cors.php');

include('./'.$_REQUEST['route'].'/index.php');

